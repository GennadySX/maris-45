<template>
    <div class="tab-content">
        <div class="tab-pane active" id="home7" role="tabpanel">
            <form class="md-float-material card-block send-form" method="post" action="/">
                <div class="row flex-wrap">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name"
                                   placeholder="Название дисциплины">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="group"
                                   placeholder="Группа">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="code"
                                   placeholder="Код дисциплины по учебному плану специальности">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" name="countHours" min="10" max="150"
                                   placeholder="Количество часов для изучения дисциплину" >
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-sm-6">
                        <div class="input-group d-flex mb-0">
                            <p class="mr-4 col-4 ">Курсовая работа:</p>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="courseWork" id="courseWorkYes" type="radio" class="" value="1">
                                <label for="courseWorkYes">Да</label>
                            </div>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="courseWork" id="courseWorkNO" type="radio" class="pis"
                                       value="0">
                                <label for="courseWorkNO">Нет</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nameId"
                                   placeholder="Код специальности по классификатору РФ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group d-flex mb-0">
                            <p class="mr-4 col-4 ">Экзамен по дисциплине:</p>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="examination" id="examinationYes" type="radio" class="" value="1">
                                <label for="examinationYes">Да</label>
                            </div>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="examination" id="examinationNO" type="radio" class="pis"
                                       value="0">
                                <label for="examinationNO">Нет</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <select name="sign" class="form-control form-control-primary">
                            <option value="bachelor">Бакалавр</option>
                            <option value="magistracy">Магистратура</option>
                            <option value="speciality">Специалист</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center m-t-20">
                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10"
                                    @click="this.send">
                                Сохранить
                            </button>
                            <button type="button" class="btn btn-warning waves-effect waves-light"
                                    @click="this.back">
                                Отменить
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "create",
        props: {},
        data() {
            return {
                formData: {}
            }
        },
        methods: {
            send(e) {
                e.preventDefault()
                $('.send-form').serializeArray().map((val) => {
                    this.formData[val.name] = val.value
                    if (val.name === 'courseWork') {
                        this.formData.courseWork = $('input[name="courseWork"]:checked').val()
                    }
                    if (val.name === 'examination') {
                        this.formData.examination = $('input[name="examination"]:checked').val()
                    }
                });

                axios.post('/home/discipline/create', this.formData).then(res =>
                    (res.data.status) ?
                        this.back()
                        : alert('Что то пошло не так, пожалуйста повторите снова чут позже!')
                ).catch((e) => alert('Ошибка системы!'))
            },
            back() {
                window.location.href = '/home/discipline'
            }
        }
    }
</script>

<style scoped>

</style>
