<div class="site-header__topbar topbar">
    <div class="topbar__container container">
        <div class="topbar__row">
            <div class="topbar__item topbar__item--link d-md-none">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" style="height: 28px;width: 28px;border: 2px solid white;border-radius: 50%;padding: 2px;fill: white;"><title></title><g data-name="1" id="_1"><path d="M348.73,450.06a198.63,198.63,0,0,1-46.4-5.85c-52.43-12.65-106.42-44.74-152-90.36s-77.71-99.62-90.36-152C46.65,146.75,56.15,99.61,86.69,69.07l8.72-8.72a42.2,42.2,0,0,1,59.62,0l50.11,50.1a42.18,42.18,0,0,1,0,59.62l-29.6,29.59c14.19,24.9,33.49,49.82,56.3,72.63s47.75,42.12,72.64,56.31L334.07,299a42.15,42.15,0,0,1,59.62,0l50.1,50.1a42.16,42.16,0,0,1,0,59.61l-8.73,8.72C413.53,439,383.73,450.06,348.73,450.06ZM125.22,78a12,12,0,0,0-8.59,3.56l-8.73,8.72c-22.87,22.87-29.55,60-18.81,104.49,11.37,47.13,40.64,96.1,82.41,137.86s90.73,71,137.87,82.41c44.5,10.74,81.61,4.06,104.48-18.81l8.72-8.72a12.16,12.16,0,0,0,0-17.19l-50.09-50.1a12.16,12.16,0,0,0-17.19,0l-37.51,37.51a15,15,0,0,1-17.5,2.72c-30.75-15.9-61.75-39.05-89.65-66.95s-51-58.88-66.94-89.63a15,15,0,0,1,2.71-17.5l37.52-37.51a12.16,12.16,0,0,0,0-17.19l-50.1-50.11A12.07,12.07,0,0,0,125.22,78Z"></path><path d="M364.75,269.73a15,15,0,0,1-15-15,99.37,99.37,0,0,0-99.25-99.26,15,15,0,0,1,0-30c71.27,0,129.25,58,129.25,129.26A15,15,0,0,1,364.75,269.73Z"></path><path d="M428.15,269.73a15,15,0,0,1-15-15c0-89.69-73-162.66-162.65-162.66a15,15,0,0,1,0-30c106.23,0,192.65,86.43,192.65,192.66A15,15,0,0,1,428.15,269.73Z"></path></g></svg>&nbsp;
                <a style="font-family: monospace; font-size: 20px;" class="topbar-link" href="tel:{{ $company->phone ?? '' }}">{{ $company->phone ?? '' }}</a>
            </div>
            @foreach($menuItems as $item)
            <div class="topbar__item topbar__item--link d-none d-md-flex">
                <a class="topbar-link" href="{{ url($item->href) }}">{!! $item->name !!}</a>
            </div>
            @endforeach
            <div class="topbar__spring"></div>
            <div class="topbar__item topbar__item--link">
                <a class="topbar-link" href="{{ url('/track-order') }}">Track Order</a>
            </div>
        </div>
    </div>
</div>