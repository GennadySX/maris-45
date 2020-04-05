<template>
    <!-- project  start -->
    <div class="col-md-12 col-xl-6 ">
        <div class="card app-design">
            <div class="card-block">
                <button class="btn btn-primary f-right">Разрешено</button>
                <h3 class="f-w-400 ">Математика
                    <a href="/group/7261-11" class="btn btn-light">группа 7261-11</a>
                </h3>
                <p class="text-c-blue f-w-400 mb-1">Бакалавр</p>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <div class="design-description d-inline-block m-r-40">
                    <h3 class="f-w-400">78</h3>
                    <p class="text-muted">часов</p>
                </div>
                <div class="design-description d-inline-block">
                    <h3 class="f-w-400">Экзамен</h3>
                    <p class="text-muted">сдача</p>
                </div>
                <div class="team-box p-b-20">
                    <p class="d-inline-block m-r-20 f-w-400">Преподаватели</p>
                    <div class="team-section d-inline-block">
                        <a href="#! "><img src="/public/admin/assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt=" "></a>
                        <a href="#! "><img src="/public/admin/assets/images/avatar-3.jpg" data-toggle="tooltip" title="Lary Doe" alt=" " class="m-l-5 "></a>
                        <a href="#! "><img src="/public/admin/assets/images/avatar-4.jpg" data-toggle="tooltip" title="Alia" alt=" " class="m-l-5 "></a>
                        <a href="#! "><img src="/public/admin/assets/images/avatar-2.jpg" data-toggle="tooltip" title="Suzen" alt=" " class="m-l-5 "></a>
                        <button   type="button" class="btn btn-success btn-outline-info waves-effect md-trigger pr-1" data-modal="userSelect"><i class="icofont icofont-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="animation-model">
            <div class="md-modal md-effect-1" id="userSelect">
                <div class="md-content">
                    <h4 class="bg-dark text-center p-2">Преподаватели</h4>
                    <div class="pb-3 p-0 ">
                        <div class=" message-left">
                            <div class="card-block user-box contact-box assign-user">
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" src="/public/admin/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>Josephin Doe</h6>
                                        <p>Lorem ipsum dolor sit amet..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 close-block">
                            <button type="button" class="btn btn-danger waves-effect md-close mb-2">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- project  end -->
</template>

<script>
    export default {
        name: "list"
    }
</script>

<style scoped lang="scss">


    .userSelect {
        z-index: 999;
    }
    .message-left {
        overflow: scroll;
        height: 350px;
        overflow-x: hidden;
        margin-bottom: 15px
    }
    .media {
        padding-top: 5px;
        margin-bottom: 15px;
        border-bottom: 1px solid gray;
        padding-bottom: 0;
        transition: background 0.2s ease-in;
        cursor: pointer;
        &:hover {
            background: rgba(lightgrey, 0.5);
        }
        .media-body {
            p {
                position: relative;
                bottom: 14px;
                margin-bottom: 0;
                font-size: 11px;
            }
        }
    }


</style>
