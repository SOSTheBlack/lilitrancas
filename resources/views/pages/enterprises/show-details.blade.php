<div class="card">
            <div class="card-content">
                <div class="row purple lighten-5 border-radius-4 mb-2">
                    <div class="col s12 m4 users-view-timeline">
                        <h6 class="indigo-text m-0">{{ __('Influenciadores') }}:
                            <span>{{ $enterprise->influencers()->count() }}</span></h6>
                    </div>
                    <div class="col s12 m4 users-view-timeline">
                        <h6 class="indigo-text m-0">{{ __('Clicks') }}: <span>534</span></h6>
                    </div>
                    <div class="col s12 m4 users-view-timeline">
                        <h6 class="indigo-text m-0">{{ __('Agendamentos') }}: <span>256</span></h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <h6 class="mb-2 mt-2"><i class="material-icons">error_outline</i> {{ __('Dados Empresariais') }}</h6>
                        <table class="striped">
                            <tbody>
                            <tr>
                                <td><i class="fas fa-building"></i> {{ __('Empresa') }}:</td>
                                <td class="users-view-name">{{ $enterprise->name }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i> {{ __('Administrador') }}:</td>
                                <td class="users-view-owner-name">{{ $enterprise->owner->name }}</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-file"></i> {{ __('Empresa') }}:</td>
                                <td class="users-view-enterprise-type">{{ $enterprise->document_type == 'cnpj' ? 'Jurídica' : 'Física' }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-passport"></i> {{ __('Documento') }}:</td>
                                <td>{{ $enterprise->document_number }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-map-marker-alt"></i></i> {{ __('Cidade') }}:</td>
                                <td>{{ $enterprise->city }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-globe-americas"></i> {{ __('Pais') }}:</td>
                                <td>{{ $enterprise->country }}</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-calendar-alt"></i> {{ __('Criação') }}:</td>
                                <td>{{ $enterprise->created_at->format('d/m/Y')}}</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-calendar-alt"></i> {{ __('Atualização') }}:</td>
                                <td>{{ $enterprise->updated_at->format('d/m/Y')}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <h6 class="mb-2 mt-2"><i class="material-icons">link</i> {{ __('Links Sociais') }}</h6>
                        <table class="striped">
                            <tbody>
                            @forelse($enterprise->links as $link)
                                <tr>
                                    <td>
                                        <i class="fab fa-{{ $link->socialMedia->slug }}"></i> {{ $link->socialMedia->name }}
                                        :
                                    </td>
                                    <td><a href="{{ $link->link }}">{{ $link->link }}</a></td>
                                </tr>
                            @empty
                                <div>
                                    <span class="grey-text border-radius-5"> {{ __('Não existe links sociais cadastrados') }}</span>
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>