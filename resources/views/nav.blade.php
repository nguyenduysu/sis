<nav class="menu-bar">
    <ul>
        <li>Mã sinh viên: <strong>{{ Session::get('user')['mssv'] }}</strong></li>
        <li>Họ tên SV: <strong>{{ Session::get('user')['ten'] }}</strong></li>
        <li>
            <form action="logout">
        <li>
            <button>Thoát đăng nhập</button>
        </li>
        </form>
        </li>
    </ul>
</nav>
