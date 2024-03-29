{{-- extend Layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Criar nova empresa')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/noUiSlider/nouislider.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="card">
  <div class="card-content">
    <p class="caption mb-0">Forms are the standard way to receive user inputted data. The transitions and smoothness
      of these elements are very important because of the inherent user interaction associated with forms.</p>
  </div>
</div>
<!-- Input Fields -->
<div class="row">
  <div class="col s12">
    <div id="input-fields" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Input Fields</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-input-fields">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-input-fields">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-input-fields">
          <div class="row">
            <div class="col s12">
              <p>Text fields allow user input. The border should light up simply and clearly indicating which field
                the user is currently editing. You must have a <code class="language-markup">.input-field</code> div
                wrapping your input and label. This helps our jQuery animate the label. This is only used in our
                Input and Textarea form elements.</p>
              <p>The validate class leverages HTML5 validation and will add a <code class="language-markup">valid</code>
                and <code class="language-markup">invalid</code> class accordingly. If you don't want the Green and
                Red validation states, just remove the <code class="language-markup">validate</code> class from your
                inputs.</p>
              <br>
              <form class="row">
                <div class="col s12">
                  <div class="input-field col s12">
                    <input placeholder="Placeholder" id="first_name1" type="text" class="validate">
                    <label for="first_name1">First Name</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="last_name" type="text">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field col s12">
                    <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                    <label for="disabled">Disabled</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field col s12">
                    <input id="email3" type="email" class="validate">
                    <label for="email3">Email</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="col s12">
                    This is an inline input field:
                    <div class="input-field inline">
                      <input id="email" type="email" class="validate">
                      <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div id="html-input-fields">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;input placeholder="Placeholder" id="first_name" type="text" class="validate">
          &lt;label for="first_name">First Name&lt;/label>
      &lt;/div>
      &lt;div class="input-field col s6">
          &lt;input id="last_name" type="text" class="validate">
          &lt;label for="last_name">Last Name&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input disabled value="I am not editable" id="disabled" type="text" class="validate">
          &lt;label for="disabled">Disabled&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="password" type="password" class="validate">
          &lt;label for="password">Password&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="email" type="email" class="validate">
          &lt;label for="email">Email&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="col s12">
          This is an inline input field:
          &lt;div class="input-field inline">
          &lt;input id="email" type="email" class="validate">
          &lt;label for="email" data-error="wrong" data-success="right">Email&lt;/label>
          &lt;/div>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Prefilling Text Inputs -->
<div class="row">
  <div class="col s12">
    <div id="prefilling-text" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4 class="card-title">Prefilling Text Inputs</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-prefilling-text">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-prefilling-text">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-prefilling-text">JS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-prefilling-text">
          <div class="row">
            <div class="col s12">
              <p>If you are having trouble with the labels overlapping prefilled content, Try adding <code
                  class="language-markup">class="active"</code>
                to the label.
                <br />You can also call the function <code class="language-javascript">M.updateTextFields();</code>
                to reinitialize all the Materialize labels on the page if you are dynamically adding inputs.</p>
            </div>
            <div class="col s12">
              <div class="input-field col s6">
                <div class="row">
                  <input value="Alvin" id="first_name2" type="text" class="validate">
                  <label class="active" for="first_name2">First Name</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="html-prefilling-text">
          <pre><code class="language-javascript">
  &lt;div class="row">
    &lt;div class="input-field col s6">
      &lt;input value="Alvin" id="first_name2" type="text" class="validate">
      &lt;label class="active" for="first_name2">First Name&lt;/label>
    &lt;/div>
  &lt;/div>
  </code></pre>
        </div>
        <div id="js-prefilling-text">
          <pre><code class="language-markup">
  $(document).ready(function() {
    M.updateTextFields();
  });
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Icon Prefixes -->
<div class="row">
  <div class="col s12">
    <div id="icon-prefixes" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Icon Prefixes</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-icon-prefixes">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-icon-prefixes">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-icon-prefixes">
          <p>You can add an icon prefix to make the form input label even more clear. Just add an icon with the class
            <code class="language-markup">prefix</code> before the input and label.</p>
          <br>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix3" type="text" class="validate">
                  <label for="icon_prefix3">First Name</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="number" class="validate">
                  <label for="icon_telephone">Telephone</label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="html-icon-prefixes">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;i class="material-icons prefix">account_circle&lt;/i>
          &lt;input id="icon_prefix" type="text" class="validate">
          &lt;label for="icon_prefix">First Name&lt;/label>
        &lt;/div>
        &lt;div class="input-field col s6">
          &lt;i class="material-icons prefix">phone&lt;/i>
          &lt;input id="icon_telephone" type="tel" class="validate">
          &lt;label for="icon_telephone">Telephone&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom Error or Success Messages -->
<div class="row">
  <div class="col s12">
    <div id="custom-error" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Custom Error or Success Messages</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-custom-error">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-custom-error">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-custom-error">
          <p>You can add custom validation messages by adding either <code class="language-markup">data-error</code>
            or <code class="language-markup">data-success</code> attributes to your input field labels.</p>
          <br>
          <div class="row">
            <form class="col s12">

              <div class="input-field col s12">
                <input id="email4" type="email" class="validate">
                <label for="email4" data-error="wrong" data-success="right">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right">Helper Text</span>
              </div>
            </form>
          </div>
        </div>
        <div id="html-custom-error">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="email" type="email" class="validate">
          &lt;label for="email" data-error="wrong" data-success="right">Email&lt;/label>
          &lt;span class="helper-text" data-error="wrong" data-success="right">Helper Text&lt;/span>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Textarea -->
<div class="row">
  <div class="col s12">
    <div id="textarea" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4 class="card-title">Textarea</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-textarea">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-textarea">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-textarea">JS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-textarea">
          <p>Textareas allow larger expandable user input. The border should light up simply and clearly indicating
            which field the user is currently editing. You must have a <code class="language-markup">.input-field</code>
            div wrapping your input and label. This helps our jQuery animate the label. This is only used in our
            Input and Textarea form elements.</p>
          <p>
            <strong>Textareas will auto resize to the text inside.</strong>
          </p>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea2" class="materialize-textarea"></textarea>
                  <label for="textarea2">Textarea</label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="html-textarea">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;textarea id="textarea2" class="materialize-textarea">&lt;/textarea>
          &lt;label for="textarea2">Textarea&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
        </div>
        <div id="js-textarea">
          <p>advanced note: When dynamically changing the value of a textarea with methods like jQuery's <code
              class="language-markup">.val()</code>,
            you must trigger an autoresize on it afterwords because .val() does not automatically trigger the events
            we've binded to the textarea. </p>
          <pre><code class="language-javascript">
              $('#textarea2').val('New Text');
              M.textareaAutoResize($('#textarea2'));
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Icon Prefixes -->
<div class="row">
  <div class="col s12">
    <div id="icon-prefixes-two" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Icon Prefixes</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-icon-prefixes-two">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-icon-prefixes-two">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-icon-prefixes-two">
          <p>You can add an icon prefix to make the form input label even more clear. Just add an icon with the class
            <code class="language-markup">prefix</code> before the input and label.</p>
          <br>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">Message</label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="html-icon-prefixes-two">
          <pre><code class="language-markup">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;i class="material-icons prefix">mode_edit&lt;/i>
          &lt;textarea id="icon_prefix2" class="materialize-textarea">&lt;/textarea>
          &lt;label for="icon_prefix2">First Name&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Select -->
<div class="row">
  <div class="col s12">
    <div id="select" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Select</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-select">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-select">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-select">
          <p> Select allows user input through specified options. Make sure you wrap it in a <code
              class="language-markup">.input-field</code>
            for proper alignment with other text fields. Remember that this is a jQuery plugin so make sure you
            <a href="#select-initialization">initialize</a> this in your document ready. </p>
          <div class="row">
            <div class="input-field col s12">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Materialize Select</label>
            </div>

            <div class="input-field col s12">
              <select>
                <optgroup label="team 1">
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                </optgroup>
                <optgroup label="team 2">
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                </optgroup>
              </select>
              <label>Optgroups</label>
            </div>

            <div class="input-field col s12 m6">
              <select class="icons">
                <option value="" disabled selected>Choose your option</option>
                <option value="" data-icon="../../../images/avatar/avatar-1.png">example 1</option>
                <option value="" data-icon="../../../images/avatar/avatar-2.png">example 2</option>
                <option value="" data-icon="../../../images/avatar/avatar-3.png">example 3</option>
              </select>
              <label>Images in select</label>
            </div>
            <div class="input-field col s12 m6">
              <select class="icons">
                <option value="" disabled selected>Choose your option</option>
                <option value="" data-icon="../../../images/avatar/avatar-1.png" class="left">example 1
                </option>
                <option value="" data-icon="../../../images/avatar/avatar-2.png" class="left">example 2
                </option>
                <option value="" data-icon="../../../images/avatar/avatar-3.png" class="left">example 3
                </option>
              </select>
              <label>Images in select</label>
            </div>

            <label>Browser Select</label>
            <select class="browser-default">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
        </div>
        <div id="html-select">
          <pre><code class="language-markup">
  &lt;div class="input-field col s12">
    &lt;select>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12">
    &lt;select multiple>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Multiple Select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12">
    &lt;select>
      &lt;optgroup label="team 1">
        &lt;option value="1">Option 1&lt;/option>
        &lt;option value="2">Option 2&lt;/option>
        &lt;/optgroup>
        &lt;optgroup label="team 2">
        &lt;option value="3">Option 3&lt;/option>
        &lt;option value="4">Option 4&lt;/option>
      &lt;/optgroup>
    &lt;/select>
    &lt;label>Optgroups&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12 m6">
    &lt;select class="icons">
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="" data-icon="../../images/avatar/avatar-7.png" class="circle">example 1&lt;/option>
      &lt;option value="" data-icon="../../images/avatar/avatar-5.png" class="circle">example 2&lt;/option>
      &lt;option value="" data-icon="../../images/avatar/avatar-3.png" class="circle">example 3&lt;/option>
    &lt;/select>
    &lt;label>Images in select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12 m6">
    &lt;select class="icons">
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="" data-icon="../../images/avatar/avatar-7.png" class="left circle">example 1&lt;/option>
      &lt;option value="" data-icon="../../images/avatar/avatar-5.png" class="left circle">example 2&lt;/option>
      &lt;option value="" data-icon="../../images/avatar/avatar-3.png" class="left circle">example 3&lt;/option>
    &lt;/select>
    &lt;label>Images in select&lt;/label>
  &lt;/div>
  &lt;label>Browser Select&lt;/label>
  &lt;select class="browser-default">
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Disabled Styles -->
<div class="row">
  <div class="col s12">
    <div id="disabled-styles" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Disabled Styles</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-disabled-styles">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-disabled-styles">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-disabled-styles">
          <p>You can also add <code class="language-markup">disabled</code> to the select element to make the whole
            thing disabled. Or if you add <code class="language-markup">disabled</code> to the options, the
            individual options will be unselectable. </p>
          <div class="row">
            <div class="col s12">
              <form class="col s12 m6">
                <div class="input-field">
                  <select disabled>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Materialize Disabled</label>
                </div>

                <label>Browser Disabled</label>
                <select class="browser-default mb-4" disabled>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </form>
            </div>
          </div>
        </div>
        <div id="html-disabled-styles">
          <pre><code class="language-markup">
  &lt;div class="input-field">
    &lt;select disabled>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Disabled&lt;/label>
  &lt;/div>
  &lt;label>Browser Disabled&lt;/label>
  &lt;select class="browser-default" disabled>
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Radio Buttons -->
<div class="row">
  <div class="col s12">
    <div id="radio-buttons" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Radio Buttons</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-radio-buttons">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-radio-buttons">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-radio-buttons">
          <p>Radio Buttons are used when the user must make only one selection out of a group of items. The
            <code class="language-markup">for</code> attribute is necessary to bind our custom radio button with the
            input. Add the input's <code class="language-markup">id</code> as the value of the <code
              class="language-markup">for</code>
            attribute of the label.</p>
          <p>Add radio buttons to a group by adding the name attribute along with the same corresponding value for
            each of the radio buttons in the group. Create disabled radio buttons by adding the disabled attribute as
            shown below.</p>
          <form action="#" class="mt-1">
            <p class="mb-1">
              <label>
                <input name="group1" type="radio" checked />
                <span>Radio-1</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input name="group1" type="radio" />
                <span>Radio-2 </span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input class="with-gap" name="group1" type="radio" />
                <span>Radio-3</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input name="group1" type="radio" disabled="disabled" />
                <span>Disabled Radio</span>
              </label>
            </p>
          </form>
        </div>
        <div id="html-radio-buttons">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;p>
      &lt;label>
        &lt;input name="group1" type="radio" checked/>
        &lt;span>Radio-1&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input name="group1" type="radio" />
        &lt;span>Radio-2&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input class="with-gap" name="group1" type="radio" />
        &lt;span>Radio-3&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input name="group1" type="radio" disabled="disabled" />
        &lt;span>Diabled Radio&lt;/span>
      &lt;/label>
    &lt;/p>
  &lt;/form>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Options -->
<div class="row">
  <div class="col s12">
    <div id="options" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Options</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-options">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-options">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-options">
          <p>To create a radio button with a gap, add <code class="language-markup">class="with-gap"</code> to your
            input. See the example below.</p>
          <p class="mt-1">
            <label>
              <input class="with-gap" name="group3" type="radio" checked />
              <span>Radio-1</span>
            </label>
          </p>
        </div>
        <div id="html-options">
          <pre><code class="language-markup">
  &lt;p>
    &lt;label>
      &lt;input class="with-gap" name="group3" type="radio" checked />
      &lt;span>Radio-1&lt;/span>
    &lt;/label>
  &lt;/p>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Checkboxes -->
<div class="row">
  <div class="col s12">
    <div id="checkboxes" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Checkboxes</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-checkboxes">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-checkboxes">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-checkboxes">
          <p>Use checkboxes when looking for yes or no answers. The <code class="language-markup">for</code>
            attribute is necessary to bind our custom checkbox with the input. Add the input's <code
              class="language-markup">id</code>
            as the value of the <code class="language-markup">for</code> attribute of the label. </p>
          <form action="#" class="mt-1">
            <p class="mb-1">
              <label>
                <input type="checkbox" />
                <span>Checkbox-1</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input type="checkbox" checked="checked" />
                <span>Checkbox-2</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input type="checkbox" class="filled-in" checked="checked" />
                <span>Filled in</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input id="indeterminate-checkbox" type="checkbox" />
                <span>Indeterminate Style</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input type="checkbox" checked="checked" disabled="disabled" />
                <span>Checkbox-3</span>
              </label>
            </p>
            <p class="mb-1">
              <label>
                <input type="checkbox" disabled="disabled" />
                <span>Disabled Radio</span>
              </label>
            </p>
          </form>
        </div>
        <div id="html-checkboxes">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" />
        &lt;span>Checkbox-1&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" checked="checked" />
        &lt;span>Checkbox-2&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" class="filled-in" checked="checked" />
        &lt;span>Filled in&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input id="indeterminate-checkbox" type="checkbox" />
        &lt;span>Indeterminate Style&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" checked="checked" disabled="disabled" />
        &lt;span>Checkbox-3&lt;/span>
      &lt;/label>
    &lt;/p>
    &lt;p>
      &lt;label>
        &lt;input type="checkbox" disabled="disabled" />
        &lt;span>Checkbox-4&lt;/span>
      &lt;/label>
    &lt;/p>
  &lt;/form>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Switches -->
<div class="row">
  <div class="col s12">
    <div id="switches" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Switches</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-switches">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-switches">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-switches">
          <p>Use checkboxes when looking for yes or no answers. The <code class="language-markup">for</code>
            attribute is necessary to bind our custom checkbox with the input. Add the input's <code
              class="language-markup">id</code>
            as the value of the <code class="language-markup">for</code> attribute of the label. </p>
          <form action="#" class="mt-1">
            <div class="switch mb-1">
              <label>
                Off
                <input checked type="checkbox">
                <span class="lever"></span>
                On
              </label>
            </div>
            <div class="switch">
              <label>
                Off
                <input disabled type="checkbox">
                <span class="lever"></span>
                On
              </label>
            </div>
          </form>
        </div>
        <div id="html-switches">
          <pre><code class="language-markup">
  &lt;!-- Switch -->
  &lt;div class="switch">
    &lt;label>
      Off
      &lt;input type="checkbox">
      &lt;span class="lever">&lt;/span>
      On
    &lt;/label>
  &lt;/div>
  &lt;!-- Disabled Switch -->
  &lt;div class="switch">
    &lt;label>
      Off
      &lt;input disabled type="checkbox">
      &lt;span class="lever">&lt;/span>
      On
    &lt;/label>
  &lt;/div>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- File Input -->
<div class="row">
  <div class="col s12">
    <div id="file-input" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">File Input</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-file-input">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-file-input">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-file-input">
          <p>If you want to style an input button with a path input we provide this structure.</p>
          <form action="#">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </form>
        </div>
        <div id="html-file-input">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;div class="file-field input-field">
      &lt;div class="btn">
        &lt;span>File&lt;/span>
        &lt;input type="file">
      &lt;/div>
      &lt;div class="file-path-wrapper">
        &lt;input class="file-path validate" type="text">
      &lt;/div>
    &lt;/div>
  &lt;/form>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Multiple File Input -->
<div class="row">
  <div class="col s12">
    <div id="multiple-file-input" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Multiple File Input</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-multiple-file-input">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-multiple-file-input">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-multiple-file-input">
          <p>You can also use the <code class="language-markup">multiple</code> attribute to allow multiple file
            uploads. </p>
          <form action="#">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" multiple>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files">
              </div>
            </div>
          </form>
        </div>
        <div id="html-multiple-file-input">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;div class="file-field input-field">
      &lt;div class="btn">
      &lt;span>File&lt;/span>
      &lt;input type="file" multiple>
    &lt;/div>
    &lt;div class="file-path-wrapper">
      &lt;input class="file-path validate" type="text" placeholder="Upload one or more files">
      &lt;/div>
    &lt;/div>
  &lt;/form>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Range -->
<div class="row">
  <div class="col s12">
    <div id="range" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4 class="card-title">Range</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-Range">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-Range">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-Range">JS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-Range">
          <p>Add a range slider for values with a wide range. This one is set to be a number between 0 and 100. We
            have two different types of sliders. nouiSlider is a 3rd party plugin which we've modified. To use the
            noUiSlider, you will have to manually link the <code class="language-markup">nouislider.css</code> and
            <code class="language-markup">nouislider.js</code> files located in the extras folder.</p>
          <h4 class="header">noUiSlider</h4>
          <p>See noUiSlider's official documentation <a href="https://refreshless.com/nouislider/">here</a> to see a
            variety of slider options</p>
          <div id="test-slider" class="mt-2"></div>
        </div>
        <div id="html-Range">
          <pre><code class="language-markup">
  &lt;div id="test-slider">&lt;/div>
  </code></pre>
        </div>
        <div id="js-Range">
          <pre><code class="language-javascript">
  var slider = document.getElementById('test-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      step: 1,
      orientation: 'horizontal', // 'horizontal' or 'vertical'
      range: {
      'min': 0,
      'max': 100
    },
    format: wNumb({
      decimals: 0
    })
  });
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HTML5 Range -->
<div class="row">
  <div class="col s12">
    <div id="html-range" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">HTML5 Range</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-html-range">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-html-range">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-html-range">
          <form action="#">
            <p class="range-field">
              <input type="range" name="points" min="0" max="100">
            </p>
          </form>
        </div>
        <div id="html-html-range">
          <pre><code class="language-markup">
  &lt;form action="#">
    &lt;p class="range-field">
      &lt;input type="range" id="test5" min="0" max="100" />
    &lt;/p>
  &lt;/form>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Date Picker -->
<div class="row">
  <div class="col s12">
    <div id="date-picker" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4 class="card-title">Date Picker</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-date-picker">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-date-picker">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-date-picker">JS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-date-picker">
          <p>We use a modified version of pickadate.js to create a materialized date picker. Test it out below! </p>
          <label for="birthdate">Birthdate</label>
          <input type="text" class="datepicker" id="birthdate">
        </div>
        <div id="html-date-picker">
          <pre><code class="language-markup">
  &lt;input type="text" class="datepicker">
  </code></pre>
        </div>
        <div id="js-date-picker">
          <pre><code class="language-javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
          
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Time Picker -->
<div class="row">
  <div class="col s12">
    <div id="time-picker" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4 class="card-title">Time Picker</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-time-picker">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-time-picker">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-time-picker">JS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-time-picker">
          <p>We use a modified version of pickatime.js to create a materialized time picker. Test it out below! </p>
          <label for="lunch-time">Lunch Time</label>
          <input type="text" class="timepicker" id="lunch-time">
        </div>
        <div id="html-time-picker">
          <pre><code class="language-markup">
  &lt;input type="text" class="timepicker">
  </code></pre>
        </div>
        <div id="js-time-picker">
          <pre><code class="language-javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.timepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.timepicker').timepicker();
  });
          
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Auto Complete -->

<div class="row">
  <div class="col s12">
    <div id="autoComplete" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4>Auto Complete</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0">
                  <a href="#view-autocomplete" class="active p-0">View</a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#view-html" class="p-0">HTML</a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#view-js" class="p=0">JS</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-autocomplete">
          <div class="row">
            <div class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">textsms</i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Autocomplete</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="view-html">
          <pre class="language-markup">
  <code class="language-markup">
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col s12&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;input-field col s12&quot;&gt;
        &lt;i class=&quot;material-icons prefix&quot;&gt;textsms&lt;/i&gt;
        &lt;input type=&quot;text&quot; id=&quot;autocomplete-input&quot; class=&quot;autocomplete&quot;&gt;
        &lt;label for=&quot;autocomplete-input&quot;&gt;Autocomplete&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
  </code>
</pre>
        </div>
        <div id="view-js">
          <pre class="language-javascript">
  <code class="language-javascript">
$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
  });
});  
  </code>
</pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Character counter -->

<div class="row">
  <div class="col s12">
    <div id="autoComplete2" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l6">
              <h4>Character Counter</h4>
            </div>
            <div class="col s12 m6 l6">
              <ul class="tabs">
                <li class="tab col s4 p-0">
                  <a href="#view-counter" class="active p-0">View</a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#view-counter-html" class="p-0">HTML</a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#view-counter-js" class="p=0">JS</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-counter">
          <div class="row">
            <div class="col s12">
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="input_text" type="text" data-length="10">
                      <label for="input_text">Input text</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                      <label for="textarea1">Textarea</label>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        <div id="view-counter-html">
          <pre class="language-markup">
  <code class="language-markup">
&lt;div class=&quot;row&quot;&gt;
&lt;form class=&quot;col s12&quot;&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;input-field col s6&quot;&gt;
      &lt;input id=&quot;input_text&quot; type=&quot;text&quot; data-length=&quot;10&quot;&gt;
      &lt;label for=&quot;input_text&quot;&gt;Input text&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;input-field col s12&quot;&gt;
      &lt;textarea id=&quot;textarea1&quot; class=&quot;materialize-textarea&quot; data-length=&quot;120&quot;&gt;&lt;/textarea&gt;
      &lt;label for=&quot;textarea1&quot;&gt;Textarea&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
&lt;/div&gt;
  </code>
</pre>
        </div>
        <div id="view-counter-js">
          <pre class="language-javascript">
  <code class="language-javascript">
    $(document).ready(function() {
      $('input#input_text, textarea#textarea1').characterCounter();
    });
  </code>
</pre>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/noUiSlider/nouislider.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-elements.js')}}"></script>
@endsection