<nav class="content-filter">
  <div class="container">
    <a href="#" class="content-filter__toggle"></a>
    <ul class="content-filter__list">
      <li class="content-filter__item"><a href="{{ route('users.index') }}" class="content-filter__link">{{ __("site.tp_personal_info") }}</a></li>
      <li class="content-filter__item content-filter__item--active"><a href="{{ route('users.idcard') }}" class="content-filter__link">{{ __("site.tp_idcard") }}</a></li>
      <li class="content-filter__item "><a href="{{ route('users.contract') }}" class="content-filter__link">{{ __("site.tp_contract") }}</a></li>
      <li class="content-filter__item "><a href="{{ route('users.finish') }}" class="content-filter__link">{{ __("site.tp_registred") }}</a></li>
    </ul>
  </div>
</nav>