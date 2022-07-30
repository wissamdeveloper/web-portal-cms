<header >
    <div class="to fixed-top">
        <ul class="nav__links">
            <p >وزارة البريد والمواصلات</p>
            <p class="float-left mr-5">السلكية واللاسلكية</p>

        </ul>
          <img src="{{asset('vendor/images/logo.png')}}" alt="logo" width="70px" style="margin-top:5px;">
          <ul class="nav__linkss ">
            <p >Ministère de la Poste et  </p>
             <p class="float-right">des Télécommunications</p>
          </ul>
          <!-- <a class="cta " href="#"><button><i class="fab fa-facebook"></i></button></a>
          <a class="cta " href="#"><button><i class="fab fa-facebook"></i></button></a>
          <a class="cta " href="#"><button><i class="fab fa-facebook"></i></button></a> -->
      </div>
    <div class="header fixed-top-2" style="background-color: #2c29b9;">
        <a href="{{ route('mpt.home') }}" class="icons">
            <div ><i class="fas fa-home"></i></div>
<nav class="navbar">
    {{-- class="{!! set_active('/about') !!}" --}}
                <a href="#about" style="padding:0px 60px;">{{ trans('mpt.menu.ministere') }}</a>
                <a href="#ACT"  style="padding:0px 60px;">{{ trans('mpt.menu.activites') }}</a>
                <a href="#blogs" style="padding:0px 60px;">{{ trans('mpt.menu.actualites') }}</a>
                <a href="#TJ"  style="padding:0px 60px;">{{ trans('mpt.menu.textesjuridiques') }}</a>
                <a href="#contact" style="padding:0px 60px;">{{ trans('mpt.menu.contact') }}</a>
</nav>
        </a>



        <div class="icons">
            <div class="fas fa-search " id="search-btn" style="color: #fff; padding:0px 20px;"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
            @switch(app()->getLocale())
                @case('en')
                <a  href="{{ route('localization.switch', ['language' => 'fr']) }}" style="color: #fff; background-color:#2c29b9; font-size:2.3rem; margin:10px; text-decoration:none;">{{ trans('localization.fr') }}</a>
                    @break

                @case('fr')
                <a  href="{{ route('localization.switch', ['language' => 'en']) }}"  style="color: #fff; background-color:#2c29b9; font-size:2.3rem; margin:10px;  text-decoration:none;  ">{{trans('localization.en')}}</a>
                @break
            @endswitch

        </div>
        <div class="search-form {{ Route::currentRouteName('search-form') ? 'active' : '' }}" style="background-color: rgb(92, 134, 211); height:62px;">
            {{-- <input  type="search" name="keyword" value="{{ request()->get('keyword') }}" id="search-box"
            placeholder="{{ trans('mpt.form_control.input.search.attribute') }}">
            <label href="{{ route('mpt.search') }}" for="search-box" class="fas fa-search"></label> --}}
            <form class="input-group" action="{{ route('mpt.search') }}" method="GET">
                <div style="display: flex;">
                <input name="keyword" value="{{ request()->get('keyword') }}" type="search" class="form-control"
                 style="width:323px; "
                 placeholder="{{ trans('mpt.form_control.input.search.placeholder') }}">
                <div >
                    <button class="btn " type="submit" style="height: 55px;  " >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            </form>
        </div>



         {{-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#" style="color: #000">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div> --}}
    </div>
</header>
