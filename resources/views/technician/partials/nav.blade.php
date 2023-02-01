<aside class="side-nav">
    <div class="logo">
        <img src="{{asset('img/admin.jpg')}}" width="20%" alt="">
        Technician PANEL
    </div>
    <ul>
        <li>
            {{-- <a href="#">Dashboard</a> --}}
        </li>
        <li>
            <a href="{{route('technicianpanel')}}">Orders</a>
        </li>
        <li>
            <a href="{{route('technicianpanel.confirmed')}}">Confirmed Orders</a>
        </li>
        
    </ul>

    <div class="logout">
        <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h7v2H5v14h7v2Zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5Z"/></svg>
            &nbsp; logout
        </button>
        </form>
    </div>
</aside>