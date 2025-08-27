@if($items)
    <ul class="{{ $parentCss }}">
        @foreach($items as $item)
            <li class="{{ $item->children->count() > 0 ? 'has-sub-menu':''}}">
                <a class="{{ $item->isActive() ? 'active':'' }}" href="{{ $item->link() }}">{{ $item->name }}</a>
                @if($item->children->count() > 0)
                    <svg class="has-sub-menu-arrow" width="10" height="4" viewBox="0 0 10 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 4L9.33013 0.25H0.669873L5 4Z" fill="white"/>
                    </svg>
                    <x-menu::nested-menu-component :items="$item->children"/>
                @endif
            </li>
        @endforeach
    </ul>
@endif

