<!-- Sidebar inner chat end-->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Менью</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-menu">
                        <a href="/home">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Профиль</span>
                        </a>
                    </li>
                    @if(in_array(\Illuminate\Support\Facades\Auth::user()->role, array('admin' , 'teacher')))
                    <li class="pcoded-menu">
                        <a href="/home/discipline">
                            <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                            <span class="pcoded-mtext">Дисциплины</span>
                        </a>
                    </li>
                    <li class="pcoded-menu">
                        <a href="/home/teacherDocs">
                            <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                            <span class="pcoded-mtext">Учебники</span>
                        </a>
                    </li>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->role === 'admin')
                        <li class="pcoded-menu">
                            <a href="/home/teachers">
                                <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                <span class="pcoded-mtext">Преподавателей</span>
                            </a>
                        </li>

                        <li class="pcoded-menu">
                            <a href="/home/users">
                                <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                <span class="pcoded-mtext">Пользователи</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">



