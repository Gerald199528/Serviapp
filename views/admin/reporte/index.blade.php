@extends('layouts.admin')
@section('title','Serviapp')
@section('style')
@section('body')
@section('profile')
@section('nav')






<div class="container-fluid">
    <div class="card">
      <div class="card-body wizard-content">
        <h4 class="card-title">Basic Form Example</h4>
        <h6 class="card-subtitle"></h6>
        <form clas id="example-form" action="#" class="mt-5">
          <div>              <h3>Account</h3>
            <section>
            @livewire('category-select')
            </section>
            <h3>Profile</h3>
            <section>

            </section>
            <h3>Hints</h3>
            <section>
              <ul>
                <li>Foo</li>
                <li>Bar</li>
                <li>Foobar</li>
              </ul>
            </section>
            <h3>Finish</h3>
            <section>
              <input
                id="acceptTerms"
                name="acceptTerms"
                type="checkbox"
                class="required"
              />
              <label for="acceptTerms"
                >I agree with the Terms and Conditions.</label
              >
            </section>
          </div>
        </form>
      </div>
    </div>

  </div>

  <footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by
    <a href="https://www.wrappixel.com">WrapPixel</a>.
  </footer>

</div>

</div>





@endsection
