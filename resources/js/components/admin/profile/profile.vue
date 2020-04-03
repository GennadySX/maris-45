<template>
    <!-- tab panel personal start -->
    <div >
        <!-- personal card start -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Персональные данные</h5>
                <button id="edit-btn" type="button"
                        class="btn btn-sm btn-primary waves-effect waves-light f-right">
                    <i class="icofont icofont-edit"></i>
                </button>
            </div>
            <div class="card-block">
                <div class="view-info">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="general-info">
                                <div class="row" v-if="this.teacher">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="table-responsive">
                                            <table class="table m-0">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">ФИО</th>
                                                    <td>{{this.teacher.name}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">E-mail почта</th>
                                                    <td>
                                                        <a href="#!">{{this.user.email}}</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Номер телефона</th>
                                                    <td v-if="this.teacher">{{this.teacher.phone}}</td>
                                                    <td v-else class="text-muted">+0 000 000 00 00</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">День рождения</th>
                                                    <td v-if="this.teacher">{{this.teacher.birth}}</td>
                                                    <td v-else class="text-muted">01.01.1990</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Место рождение</th>
                                                    <td v-if="this.teacher">{{this.teacher.place}}</td>
                                                    <td v-else class="text-muted">Мосвка</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Домашний адрес</th>
                                                    <td v-if="this.teacher">{{this.teacher.address}}</td>
                                                    <td v-else class="text-muted">Ул. Пушкина, 1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Номер паспорта</th>
                                                    <td v-if="this.teacher">{{this.teacher.passport}}</td>
                                                    <td v-else class="text-muted">АА4564688</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Дата выдачи паспорта</th>
                                                    <td v-if="this.teacher">{{this.teacher.passportDate}}</td>
                                                    <td v-else class="text-muted">20.05.2015</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Кем выдан паспорт</th>
                                                    <td v-if="this.teacher">{{this.teacher.region}}</td>
                                                    <td v-else class="text-muted">МВД РТ г. Казань</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end of table col-lg-6 -->
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Название основной кафедры
                                                    </th>
                                                    <td v-if="this.teacher.department">{{this.teacher.department}}</td>
                                                    <td v-else class="text-muted">ИПМ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Название института</th>
                                                    <td v-if="this.teacher.institute">{{this.teacher.institute}}</td>
                                                    <td v-else class="text-muted">Институт моды и дизайна</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Оконченный ВУЗ</th>
                                                    <td v-if="this.teacher.education">{{this.teacher.education}}</td>
                                                    <td v-else class="text-muted">КНИТУ-КХТИ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Год окончания ВУЗ-а</th>
                                                    <td v-if="this.teacher.year">{{this.teacher.year}}</td>
                                                    <td v-else class="text-muted">2014</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Специальности</th>
                                                    <td v-if="this.teacher.speciality">{{this.teacher.speciality}}</td>
                                                    <td v-else class="text-muted">ИПМ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ученая степень</th>
                                                    <td v-if="this.teacher.degreeYes && this.teacher.degreeYes === 1 ">Да</td>
                                                    <td v-else>Нет</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ученая степень
                                                        преподавателя
                                                    </th>
                                                    <td v-if="this.teacher.degree">{{this.teacher.degree}}</td>
                                                    <td v-else class="text-muted">1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ученое звание
                                                        преподавателя
                                                    </th>
                                                    <td v-if="this.teacher.rank">{{this.teacher.rank}}</td>
                                                    <td v-else class="text-muted">1</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Занимаемая должность на
                                                        кафедре
                                                    </th>
                                                    <td v-if="this.teacher.post">{{this.teacher.post}}</td>
                                                    <td v-else class="text-muted">Доцент</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end of table col-lg-6 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of general info -->
                        </div>
                        <!-- end of col-lg-12 -->
                    </div>
                    <!-- end of row -->
                </div>
                <profile-edit
                :user-data="this.user"
                @updated="this.updatedEmit"
                />
            </div>
            <!-- end of card-block -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Примечания</h5>
                        <button id="edit-info-btn" type="button"
                                class="btn btn-sm btn-primary waves-effect waves-light f-right">
                            <i class="icofont icofont-edit"></i>
                        </button>
                    </div>
                    <div class="card-block user-desc">
                        <div class="view-desc">
                            <p v-if="teacher.comment "> {{teacher.comment}}</p>
                            <p v-else class="text-muted">Напишите о себе. </p>
                        </div>
                      <profile-comment
                      :user-data="this.user"
                      @updated="this.updatedEmit"
                      />
                    </div>
                </div>
            </div>
        </div>
        <!-- personal card end-->
    </div>
    <!-- tab pane personal end -->
</template>

<script>
    import ProfileComment from './profile-edit-comment'
    import ProfileEdit from './profile-edit'
    export default {
        name: "index",
        props: {
            getdata: null,
        },
        data() {
            return {
                user: JSON.parse(this.getdata),
                comment: this.getdata,
                teacher: null
            }
        },
        components: {
            ProfileComment,
            ProfileEdit,
        },
        created() {
            (this.user && this.user.teacher) ? this.teacher = this.user.teacher : null
            // console.log('data c', this.getdata)
        },
        methods: {
            updatedEmit(data) {
                console.log('listen data ', data)
                this.teacher = data
            }
        }
    }
</script>

<style scoped>

</style>
