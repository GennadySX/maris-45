<template>
    <!-- project  start -->
    <div class="dBlock d-flex flex-wrap">
        <div class="col-md-12 col-xl-6" v-for="(item, index) in list" :key="index" v-if="list">
            <div class="card app-design">
                <div class="card-block">
                    <div v-if="permission">
                        <a class="btn btn-danger f-right ml-1 pr-1" :href="'/home/discipline/delete/'+item.id"><i
                            class="icofont icofont-close-line"></i></a>
                        <a class="btn btn-primary f-right" :href="'/home/discipline/edit/'+item.id">Изменить</a>
                    </div>
                    <div v-if="teacher.user_id === user.id && permission ===  false" v-for="(teacher, index) in item.rel">
                        <a class="btn btn-primary ml-2 f-right text-light" @click="openAddBookModal($event, item)">+</a>
                        <a class="btn btn-primary f-right text-light btn-discpiline-status" v-if="teacher.permission == 1">Доступно</a>
                        <a class="btn btn-danger f-right text-light btn-discpiline-status" v-else> Учебного план нет</a>
                    </div>
                    <h3 class="f-w-400 ">{{item.name}}
                        <a href="/group/7261-11" class="btn btn-light">Группа: {{item.group}}</a>
                    </h3>
                    <p class="text-c-blue f-w-400 mb-1" v-if="item.sign === 'bachelor'">Бакалавр</p>
                    <p class="text-c-blue f-w-400 mb-1" v-else-if="item.sign === 'magistracy'">Магистратура</p>
                    <p class="text-c-blue f-w-400 mb-1" v-else>Специалист</p>
                    <p class="text-muted">Код специальности по классифактору РФ: <b class="ml-2">{{item.nameId}}</b>.
                    </p>
                    <div class="design-description d-inline-block m-r-40">
                        <h3 class="f-w-400">{{item.countHours}}</h3>
                        <p class="text-muted">часов</p>
                    </div>
                    <div class="design-description d-inline-block mr-5">
                        <h3 class="f-w-400" v-if="item.courseWork">Экзамен</h3>
                        <h3 class="f-w-400" v-else>Зачет</h3>
                        <p class="text-muted">сдача</p>
                    </div>
                    <div class="design-description d-inline-block" v-if="item.courseWork">
                        <h3 class="f-w-400">Курсовая</h3>
                        <p class="text-muted">работа</p>
                    </div>
                    <div class="team-box p-b-20">
                        <p class="d-inline-block m-r-20 f-w-400">Преподаватели</p>
                        <div class="team-section d-inline-block">
                            <a class="userCard" href="#" v-if="item.teacherlist"
                               v-for="(teacher, index_t) in item.teacherlist"
                               @click="teacherSelect( $event, item.id, index, teacher)"
                            >
                                <img :src="teacher['picture']" data-toggle="tooltip" :title="teacher.name" alt=""
                                     v-if="teacher['picture']">
                                <img src="/public/admin/assets/images/avatar-1.jpg" data-toggle="tooltip"
                                     :title="teacher.name" alt=" " v-else>
                            </a>
                            <button
                                v-if='permission'
                                @click="addTeacher(index, item.teacherlist)"
                                type="button" class="btn btn-success btn-outline-info waves-effect md-trigger pr-1"><i
                                class="icofont icofont-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="d-none btn btn-success btn-outline-info waves-effect md-trigger fblock"
                id="openModal" data-modal="userSelect"><i class="icofont icofont-plus"></i></button>
        <button type="button" class="d-none btn btn-success btn-outline-info waves-effect md-trigger fblock"
                id="openModalR" data-modal="userRemove"><i class="icofont icofont-plus"></i></button>
        <button type="button" class="d-none btn btn-success btn-outline-info waves-effect md-trigger fblock"
                id="openErrorModal" data-modal="ErrorModal"><i class="icofont icofont-plus"></i></button>
        <button type="button" class="d-none btn btn-success btn-outline-info waves-effect md-trigger fblock"
                id="openAddBook" data-modal="addBook"><i class="icofont icofont-plus"></i></button>

        <div class="animation-model">
            <div class="md-modal md-effect-1" id="userSelect">
                <div class="md-content">
                    <h4 class="bg-dark text-center p-2">Преподаватели</h4>
                    <div class="pb-3 p-0 ">
                        <div class=" message-left">
                            <div class="card-block user-box contact-box assign-user">
                                <div class="media" v-if="teacherlist" v-for="(teacher, indexTeacher) in teacherlist"
                                     @click="choiceTeacher(teacher)">
                                    <div class="media-left media-middle photo-table">
                                        <a href="#">
                                            <img class="media-object img-radius" :src="teacher.picture"
                                                 alt="Generic placeholder image" v-if="teacher.picture">
                                            <img class="media-object img-radius"
                                                 src="/public/admin/assets/images/avatar-1.jpg"
                                                 alt="Generic placeholder image" v-else>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h6>{{teacher.name}}</h6>
                                        <p>{{teacher.speciality}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 close-block">
                            <button type="button" class="btn btn-danger waves-effect md-close mb-2 md-close" id="closeModal">
                                Закрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-modal md-effect-5" id="userRemove">
                <div class="md-content">
                    <h4 class="bg-dark text-center p-2">Преподаватель</h4>
                    <div class="pb-3 p-0 d-flex justify-content-center  ">
                        <div class="mb-2 close-block d-flex justify-content-center col-7">
                            <button type="button" class="btn btn-danger waves-effect md-close mb-2 "
                                    @click="removeSend">Удалить
                            </button>
                            <button type="button" class="btn btn-light waves-effect md-close mb-2 font-weight-bold md-close"
                                    id="closeModalR">Закрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-modal md-effect-5" id="ErrorModal">
                <div class="md-content">
                    <h4 class="bg-danger text-center p-2">Ошибка</h4>
                    <div class="pb-3 p-0  ">
                        <div class="text-block d-flex justify-content-center p-3 ">
                            <p>Вы не можете добавить больше 3-х преподаватели!</p>
                        </div>
                        <div class="mb-2 close-block d-flex justify-content-center col-12">

                            <button type="button" class="btn btn-danger waves-effect md-close mb-2 font-weight-bold md-close"
                                    id="closeErrorModalR">Закрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>

            <div class="md-modal md-effect-13 addcontact" id="addBook">
                <div class="md-content">
                    <h3 class="f-26 bg-c-green">Добавить учебник</h3>
                    <div >
                        <form id="sendFormBook">
                            <div class="input-group">
                                <input type="text" class="form-control pname" placeholder="Название учебника" name="name">
                            </div>
                            <div class="input-group d-none">
                                <input type="text" name="name_id" class="form-control stock" v-model="bookState.discipline">
                            </div>
                            <div class="input-group d-none">
                                <input type="text" id="sign" class="form-control stock" name="sign" v-model="bookState.sign">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control pname" name="ISBN" placeholder="Код учебника">
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control pname" name="bookYear" placeholder="Год издания">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control pname" name="press" placeholder="Название издательства">
                            </div>

                            <div class="input-group">
                                <input type="number" class="form-control pname" name="pages" placeholder="Количество страницы">
                            </div>
                            <div class="input-group">
                                <input type="number" class="form-control pname" name="doc_number" placeholder="Номер приказа">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control pname" name="paper" placeholder="Название поступившего приказа">
                            </div>
                            <div class="input-group d-block ">
                                <small>Дата приказа:</small>
                                <input type="date" class="form-control pname col-12 w-100" name="document" placeholder="Дата приказа" value="2010-05-04">
                            </div>
                            <div class="input-group">
                                <textarea class="form-control pname" placeholder="Об учебнике" name="comment" rows="4"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn" @click="sendBook($event)">Создать</button>
                                <button type="button" id="closeIt" class="btn btn-danger waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Закрыть</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>

        </div>
    </div>


    <!-- project  end -->
</template>

<script>
    export default {
        name: "list",
        props: {},
        data() {
            return {
                state: {
                    currentListIndex: null,
                    currentTeacherlist: null,
                    currentTeacher: null,
                    user_id: null,
                    discipline_id: null,
                },
                user: null,
                list: null,
                teacherlist: null,
                permission: false,
                bookState: {
                    discipline: "0",
                    sign: "0",
                }
            }
        },
        created() {
            this.init()
        },
        mounted() {
            console.log('permission', this.permission)
        },
        methods: {
            init() {
                axios.get('/home/discipline/list').then(res => {
                    console.log('get data ', res.data)
                    if (res.data.status) {
                        this.list = res.data.list
                        this.user = res.data.user
                        this.teacherlist = res.data.teacherlist
                        if (res.data.user['role'] === 'admin') {
                            this.permission = true
                        }
                    }
                })
            },
            addTeacher(index, teacherlist) {
                this.state.currentListIndex = index
                this.state.currentTeacherlist = teacherlist
                if (teacherlist.length < 3) {
                    $('#openModal').trigger('click')
                } else {
                    $('#openErrorModal').trigger('click')
                }
                // console.log('data item', e)
            },
            choiceTeacher(teacher, found = false) {
                // (!this.state.currentTeacherlist.includes(teacher)) ? this.addSend(teacher) : alert('Преподаватель уже в списке!')
                Object.keys(this.state.currentTeacherlist).filter((key, index) => (this.state.currentTeacherlist[key].id === teacher.id) ? found = true : null)
                if (found) {
                    alert('Преподаватель уже в списке!')
                } else this.addSend(teacher)
            },
            addSend(teacher) {
                axios.post('/home/discipline/teacher/add', {
                    discipline_id: this.list[this.state.currentListIndex].id,
                    user_id: teacher.id
                }).then(res => {
                    if (res.data.status) {
                        this.list[this.state.currentListIndex].teacherlist.push(teacher);
                        $('#closeModal').trigger('click')
                    } else alert('Что то пошло не так, попробуйте попытку чуть позже!')
                });
            },
            teacherSelect(e, discipline_id, index, teacher) {
                e.preventDefault()
                console.log('index', index)
                this.state.currentTeacher = teacher
                this.state.discipline_id = discipline_id
                this.state.currentListIndex = index;

                if (this.permission) $('#openModalR').trigger('click')
            },
            removeSend() {
                console.log('remove data ', this.state)
                axios.post('/home/discipline/teacher/remove', {
                    discipline_id: this.list[this.state.currentListIndex].id,
                    user_id: this.state.currentTeacher.id
                }).then(res => {
                    if (res.data.status) {
                        this.list[this.state.currentListIndex].teacherlist.splice(this.state.currentTeacher, 1);
                        $('#closeModalR').trigger('click')
                    } else alert('Что то пошло не так, попробуйте попытку чуть позже!')
                });
            },
            openAddBookModal(e, item) {
                e.preventDefault()
                console.log('item', item)
                this.bookState.discipline = item.id
                this.bookState.sign = item.sign
                console.log('bookState', this.bookState)
                $('#openAddBook').trigger('click')
            },
            sendBook() {
                const form = $('#sendFormBook').serializeArray()
                if (this.state.discipline === "0" ) alert('Выберите группу!')
                else {
                    if (this.state.sign === "0") alert('Выберите степень!')
                    else {
                        Object.keys(form).map((key, index) => this.state[form[key]['name']] = form[key]['value'])
                        axios.post('/home/teacherDocs/create', this.state).then(res => {
                            if(res.data.status) {
                                window.location.reload()
                                $('#closeAddBook').trigger('click')
                            }
                        })
                    }
                }
                console.log('state data', this.state)
            },

        }
    }
</script>

<style scoped lang="scss">

    .userCard {
        margin-right: 10px;

        img {
            width: 35px;
            height: 35px;
            object-fit: cover;
        }
    }

    .dBlock {
        width: 100vw;
    }

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
    .btn-discpiline-status {
        text-transform: none !important;
    }
    .text-block p {
        font-size: 1.3rem;
    }


</style>
