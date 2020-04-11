<template>
    <div class="tab-content">
        <div class="tab-pane active" id="home7" role="tabpanel">
            <form class="md-float-material card-block send-form" method="post" action="/">
                <div class="row flex-wrap" >
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name"
                                   placeholder="Название дисциплины" :value="this.discipline.name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="group"
                                   placeholder="Группа" :value="this.discipline.group">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="code"
                                   placeholder="Код дисциплины по учебному плану специальности" :value="this.discipline.code">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" name="countHours" min="10" max="150"
                                   placeholder="Количество часов для изучения дисциплину" :value="this.discipline.countHours">
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-sm-6">
                        <div class="input-group d-flex mb-0">
                            <p class="mr-4 col-4 ">Курсовая работа:</p>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="courseWork" id="courseWorkYes" type="radio" class="" value="1" v-if="this.discipline.courseWork === 1" checked>
                                <input name="courseWork" id="courseWorkYes" type="radio" class="" value="1" v-else>
                                <label for="courseWorkYes">Да</label>
                            </div>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="courseWork" id="courseWorkNO" type="radio" class="pis"  value="0"  v-if="this.discipline.courseWork === 0" checked>
                                <input name="courseWork" id="courseWorkNO" type="radio" class="pis"  value="0"  v-else>
                                <label for="courseWorkNO">Нет</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nameId"
                                   placeholder="Код специальности по классификатору РФ" :value="this.discipline.nameId">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group d-flex mb-0">
                            <p class="mr-4 col-4 ">Экзамен по дисциплине:</p>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="examination" id="examinationYes" type="radio" class="" value="1" v-if="this.discipline.examination === 1" checked>
                                <input name="examination" id="examinationYes" type="radio" class="" value="1" v-else>
                                <label for="examinationYes">Да</label>
                            </div>
                            <div class="col-md-2 d-flex justify-content-start">
                                <input name="examination" id="examinationNO" type="radio" class="pis" value="0" v-if="this.discipline.examination === 0" checked>
                                <input name="examination" id="examinationNO" type="radio" class="pis" value="0" v-else>
                                <label for="examinationNO">Нет</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <select name="sign" class="form-control form-control-primary select-picker" :value="this.discipline.sign">
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
        name: "edit",
        props: {
            get_discipline: null
        },
        data() {
            return {
                formData: {},
                discipline: null,
            }
        },
        created() {
            console.log('get data from laravel', this.get_discipline);

            if (this.get_discipline) {
                this.discipline = JSON.parse(this.get_discipline)
            }
        },
        methods: {
            init() {

            },
            send(e) {
                e.preventDefault()
                this.formData['id'] = this.discipline.id
                $('.send-form').serializeArray().map((val) => {
                    this.formData[val.name] = val.value
                    if (val.name === 'courseWork') {
                        this.formData.courseWork = $('input[name="courseWork"]:checked').val()
                    }
                    if (val.name === 'examination') {
                        this.formData.examination = $('input[name="examination"]:checked').val()
                    }
                });

                axios.post('/home/discipline/update', this.formData).then(res =>
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
