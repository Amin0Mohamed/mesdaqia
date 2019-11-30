<aside class="main-sidebar">
    <section class="sidebar">
        @if(Session::get('Authorize') == 1 || Session::get('Authorize') == 2)
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/productimages/{{Session::get('image')}}" class="img-circle" width="100px" height="100px" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Session::get('name')}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        @endif
        <ul class="sidebar-menu" data-widget="tree">
            @if(Session::get('Authorize') == 1)
                <li><a href="{{ route('dashboard.supervisors.index') }}"><i class="fa fa-th"></i><span>@lang('site.supervisors')</span></a></li>
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
                <li><a href="{{ route('dashboard.users.index')}}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
                <li><a href="{{ route('dashboard.cars.index') }}"><i class="fa fa-th"></i><span>@lang('site.cars')</span></a></li>
                <li><a href="{{ route('dashboard.jewleries.index') }}"><i class="fa fa-th"></i><span>@lang('site.jewleries')</span></a></li>
                <li><a href="{{ route('dashboard.highvalues.index') }}"><i class="fa fa-th"></i><span>@lang('site.highvalues')</span></a></li>
                <li><a href="{{ route('dashboard.properties.index') }}"><i class="fa fa-th"></i><span>@lang('site.properties')</span></a></li>
                <li><a href="{{ route('dashboard.vichles.index') }}"><i class="fa fa-th"></i><span>@lang('site.vichles')</span></a></li>
                <li><a href="{{ route('dashboard.Discount_fines_dues.index') }}"><i class="fa fa-th"></i><span>@lang('site.Discount_fines_dues')</span></a></li>
                <li><a href="{{ route('dashboard.supports.index') }}"><i class="fa fa-th"></i><span>@lang('site.support')</span></a></li>
                <li><a href="{{ route('dashboard.chats.index') }}"><i class="fa fa-th"></i><span>@lang('site.chat')</span></a></li>
                <li><a href="{{ route('dashboard.messages.index') }}"><i class="fa fa-th"></i><span>@lang('site.message')</span></a></li>
                <li><a href="{{ route('dashboard.addtextimage.index') }}"><i class="fa fa-th"></i><span>@lang('site.ADDTExtImag')</span></a></li>
                <li><a href="{{ route('dashboard.advertising.index') }}"><i class="fa fa-th"></i><span>@lang('site.add_advertising')</span></a></li>
                <li><a href="{{ route('dashboard.user_payment.index') }}"><i class="fa fa-th"></i><span>@lang('site.user payment')</span></a></li>
                <li><a href="{{ route('dashboard.card_payment.index') }}"><i class="fa fa-th"></i><span>@lang('site.card payment')</span></a></li>
                <li><a href="{{ url('/homemesdakia') }}"><i class="fa fa-th"></i><span>@lang('site.homemesdakia')</span></a></li>
            @elseif(Session::get('Authorize') == 2)
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
                <li><a href="{{ route('dashboard.users.index')}}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
                <li><a href="{{ route('dashboard.cars.index') }}"><i class="fa fa-th"></i><span>@lang('site.cars')</span></a></li>
                <li><a href="{{ route('dashboard.jewleries.index') }}"><i class="fa fa-th"></i><span>@lang('site.jewleries')</span></a></li>
                <li><a href="{{ route('dashboard.highvalues.index') }}"><i class="fa fa-th"></i><span>@lang('site.highvalues')</span></a></li>
                <li><a href="{{ route('dashboard.properties.index') }}"><i class="fa fa-th"></i><span>@lang('site.properties')</span></a></li>
                <li><a href="{{ route('dashboard.vichles.index') }}"><i class="fa fa-th"></i><span>@lang('site.vichles')</span></a></li>
                <li><a href="{{ route('dashboard.Discount_fines_dues.index') }}"><i class="fa fa-th"></i><span>@lang('site.Discount_fines_dues')</span></a></li>
                <li><a href="{{ route('dashboard.supports.index') }}"><i class="fa fa-th"></i><span>@lang('site.support')</span></a></li>
                <li><a href="{{ route('dashboard.chats.index') }}"><i class="fa fa-th"></i><span>@lang('site.chat')</span></a></li>
                <li><a href="{{ route('dashboard.messages.index') }}"><i class="fa fa-th"></i><span>@lang('site.message')</span></a></li>
                <li><a href="{{ route('dashboard.addtextimage.index') }}"><i class="fa fa-th"></i><span>@lang('site.ADDTExtImag')</span></a></li>
                <li><a href="{{ route('dashboard.advertising.index') }}"><i class="fa fa-th"></i><span>@lang('site.add_advertising')</span></a></li>
                <li><a href="{{ route('dashboard.user_payment.index') }}"><i class="fa fa-th"></i><span>@lang('site.user payment')</span></a></li>
                <li><a href="{{ route('dashboard.card_payment.index') }}"><i class="fa fa-th"></i><span>@lang('site.card payment')</span></a></li>
                <li><a href="{{ url('/homemesdakia') }}"><i class="fa fa-th"></i><span>@lang('site.homemesdakia')</span></a></li>
            @else
                <p style="font-size: 20px;white-space: pre-wrap;padding: 5px;margin-top: 50%;" class="w-auto text-danger text-center text-capitalize">please go to admin login first</p>
            @endif


        </ul>
    </section>

</aside>

