<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\UiAvatars\UiAvatar;
use App\Models\User;
use Creativeorange\Gravatar\Exceptions\InvalidEmailException;
use Illuminate\Contracts\Validation\Validator as Validation;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Throwable;

/**
 * Class RegisterController.
 *
 * @package App\Http\Controllers\Auth
 */
class RegisterController extends AuthController
{
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return View
     */
    public function showRegistrationForm(): View
    {
        $pageConfigs = ['bodyCustomClass' => 'register-bg', 'isCustomizer' => false];

        return view('/auth/register', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     *
     * @return Validation
     */
    protected function validator(array $data): Validation
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'min:3', 'max:20', 'unique:users'],
            'role' => ['required', 'string', Rule::in(['influencer', 'enterpriser'])]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     *
     * @return User
     */
    protected function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * The user has been registered.
     *
     * @param  Request  $request
     * @param  mixed    $user
     *
     * @return void
     */
    protected function registered(Request $request, User $user): void
    {
        $user->assignRole(Role::findByName($request->get('role')));

        try {
            $user->username = $request->get('username');
            $user->avatar = $this->getGravatar($user);

            $user->saveOrFail();
        } catch (Throwable $e) {
            app('sentry')->captureException($e);
        }
    }

    /**
     * Create the avatar for new profile.
     *
     * @param  User  $user
     *
     * @return string
     *
     */
    public function getGravatar(User $user): string
    {
        try {
            $gravatar = app('gravatar');

            if ($gravatar->exists($user->email)) {
                $avatarUrl = $gravatar->get($user->email);
            }
        } catch (InvalidEmailException $invalidEmailException) {
        } finally {
            if (! isset($avatarUrl)) {
                $avatarUrl = UiAvatar::getUrl($user->name);
            }

            return $avatarUrl;
        }
    }
}
