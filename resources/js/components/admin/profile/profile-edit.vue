<template>
    <!-- end of view-info -->
    <div class="edit-info">
        <div class="row">
            <div class="col-lg-12">
                <div class="general-info">
                    <form action="/home/profile/update" class="form-send">

                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                        <input name="name" type="text" class="form-control" placeholder="ФИО">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-at"></i></span>
                                        <input name="email" type="email" class="form-control" placeholder="E-mail">
                                    </div>

                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                            class="icofont icofont-clock-time"></i></span>
                                        <input name="birth" type="date" class="form-control" data-date-format="DD MMMM YYYY" placeholder="День рождения" value="2000-01-01">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
                                        <input name="phone" type="text" class="form-control" placeholder="+7 999 000 01 02">
                                    </div>
                                </tr>

                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                            class="icofont icofont-location-pin"></i></span>
                                        <input name="place" type="text" class="form-control" placeholder="Место рождение">
                                    </div>
                                </tr>


                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                            class="icofont icofont-location-pin"></i></span>
                                        <input name="address" type="text" class="form-control" placeholder="Домашний адрес">
                                    </div>
                                </tr>

                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-htc-one"></i></span>
                                        <input name="passport" type="text" class="form-control" placeholder="Номер паспорта">
                                    </div>
                                </tr>


                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-time"></i></span>
                                        <input name="passportDate" type="date" class="form-control" placeholder="Дата выдачи паспорта" data-date-format="DD MMMM YYYY" value="2015-08-09">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icofont icofont-police"></i></span>
                                        <input name="region" type="text" class="form-control" placeholder="Кем выдан паспорт">
                                    </div>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                        <div class="col-lg-6">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <div class="input-group">
                                        <input name="department" type="text" class="form-control" placeholder="Название основной кафедры">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="institute" type="text" class="form-control" placeholder="Название института">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="education" type="text" class="form-control" placeholder="Оконченный ВУЗ">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="year" type="text" class="form-control" placeholder="Год окончания ВУЗ-а">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="speciality" type="text" class="form-control" placeholder="Специальности">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group d-flex">
                                        <p class="mr-4 font-weight-bold">Ученая степень</p>
                                        <div class="col-md-2 d-flex justify-content-start">
                                            <input name="degreeYes" id="degreeYes" type="radio" class="" value="1">
                                            <label for="degreeYes">Да</label>
                                        </div>
                                        <div class="col-md-2 d-flex justify-content-start">
                                            <input name="degreeYes" id="degreeNO" type="radio" class="pis" value="0">
                                            <label for="degreeNO">Нет</label>
                                        </div>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="degree" type="number" class="form-control" placeholder="Ученая степень преподавателя" min="1">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="rank" type="number" class="form-control" placeholder="Ученое звание преподавателя" min="1">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <input name="post" type="text" class="form-control" placeholder="Занимаемая должность на кафедре">
                                    </div>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end of table col-lg-6 -->
                    </div>
                    <!-- end of row -->
                    <div class="text-center">
                        <span class="btn btn-primary waves-effect waves-light m-r-20 save-btn" @click="this.save">Сохранить</span>
                        <span id="edit-cancel" class="btn btn-default waves-effect ">Отменить</span>
                    </div>
                    </form>
                </div>
                <!-- end of edit info -->
            </div>
            <!-- end of col-lg-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of edit-info -->
</template>

<script>
    export default {
        name: "profile-edit",
        props: {
          userData: null,
        },
        data() {
            return {
                user: (this.userData) ? this.userData: null,
                formData: {
                    user_id: this.userData.id
                },
            }
        },
        created() {
            console.log(this.user)
        },
        methods: {
            save(e) {
                e.preventDefault()


                // console.log('form data ', this.formData)
                $('.form-send').serializeArray().map((val) => {
                    this.formData[val.name] =  val.value
                });

                axios.post('/home/profile/update', this.formData).then(res => {
                    console.log('res data  ', res.data)
                    if (res.data.status) {
                        $('#edit-cancel').trigger('click')
                        this.$emit('updated', res.data.data)
                    } else alert('Что то пошло не так, пожалуйста повторите снова чут позже!')
                })
                .catch((e) => alert('Ошибка системы!')
                )
            },

        }
    }
</script>

<style scoped lang="scss">
    input[type='radio'] {
        position: relative;
        top: 4px;
        margin-right: 10px;
    }

</style>
