<template>
    <div class="col-sm-12">
        <!-- Product list card start -->
        <div class="card">
            <div class="card-header">
                <h5>Учебники</h5>
                <a class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger text-light"
                 data-modal="modal-13" style="text-transform: none" href=   "#"> <i
                    class=" icofont icofont-plus m-r-5"></i>
                    Создать новый
                </a>
            </div>


            <div class="card-block">
                <div class="table-responsive">
                    <div class="table-content">
                        <div class="project-table">
                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>#Doc</th>
                                    <th>Название</th>
                                    <th>Дисциплина</th>
                                    <th>Группа</th>
                                    <th>Степень</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-if="doc" v-for="(doc, index) in listData">
                                    <td class="pro-list-img">
                                        <img src="/uploads/pdf.png" class="img-fluid" alt="tbl"
                                             style="height: 70px; width: 70px; object-fit: cover">
                                    </td>
                                    <td class="pro-name">
                                        <h6>{{doc.doc['name']}}</h6>
                                        <span class="text-muted">{{doc.doc['comment']}}</span>
                                    </td>

                                    <td class="pro-name">
                                        {{doc.discipline['name']}}
                                    </td>
                                    <td>
                                        <label class="text-danger">{{doc.discipline['group']}}</label>
                                    </td>
                                    <td v-if="doc.discipline['sign'] === 'bachelor'">Бакалавр</td>
                                    <td v-if="doc.discipline['sign'] === 'magistracy'">Магистратура</td>
                                    <td v-if="doc.discipline['sign'] === 'speciality'">Асперантура</td>

                                    <td class="action-icon">
                                        <a class="text-muted" @click="removeOpen($event, doc )"><i
                                            class="icofont icofont-delete-alt"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <button type="button" class="d-none btn btn-success btn-outline-info waves-effect md-trigger fblock"
                        id="btn-deleteModal" data-modal="deleteModal"><i class="icofont icofont-plus"></i></button>

                <div class="animation-model">

                    <div class="md-modal md-effect-5 " id="deleteModal">
                        <div class="md-content">
                            <h4 class="bg-dark text-center p-2">Учебник</h4>
                            <div class="pb-3 p-0 d-flex justify-content-center  ">
                                <div class="mb-2 close-block d-flex flex-wrap justify-content-center col-7">
                                    <p class="w-100">Вы действительно хотите удалить ?</p>
                                    <button type="button" class="btn btn-danger waves-effect md-close mb-2 "
                                            @click="removeSend">Удалить
                                    </button>
                                    <button type="button"
                                            class="btn  btn-light  waves-effect md-close mb-2 font-weight-bold"
                                            id="close_deleteModal" @click="closeIt($event , 'deleteModal')">Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Product list card end -->

        <div class="md-modal md-effect-13 addcontact" id="modal-13">
            <div class="md-content">
                <h3 class="f-26 bg-c-green">Добавить учебник</h3>
                <div >
                    <form id="sendForm">
                    <div class="input-group">
                        <input type="text" class="form-control pname" placeholder="Название учебника" name="name">
                    </div>
                    <div class="input-group">
                        <select id="hello-single" name="name_id" class="form-control stock" v-model="state.discipline">
                            <option value="0">Выберите дисциплину</option>
                            <option :value="discipline.id" v-for="(discipline, index_d) in disciplineList" v-if="discipline">{{discipline.name}} - гр. {{discipline.group}}</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <select id="sign" class="form-control stock" name="sign" v-model="state.sign">
                            <option value="0">Выберите степень</option>
                            <option value="bachelor" >Бакалавр</option>
                            <option value="magistracy" >Магистратура</option>
                            <option value="speciality" >Асперантура</option>
                        </select>
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
                        <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn" @click="sendIt($event)">Создать</button>
                        <button type="button" id="closeIt" class="btn btn-danger waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Закрыть</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="md-overlay"></div>

    </div>
</template>

<script>
    export default {
        name: "list",
        props: {
            get_data: null,
            disclinelist: null,
            deleteItem: null
        },
        data() {
            return {
                listData: [],
                disciplineList: null,
                state: {
                    discipline: "0",
                    sign: "0",
                }
            }
        },
        created() {
            this.init()
        },
        mounted() {
        },
        methods: {
            init() {
                this.listData = (this.get_data) ? JSON.parse(this.get_data) : null
                this.disciplineList = (this.disclinelist) ? JSON.parse(this.disclinelist) : null
                console.log('get data', this.listData[0]['doc'])
            },
            sendIt() {
                const form = $('#sendForm').serializeArray()
                if (this.state.discipline === "0" ) alert('Выберите группу!')
                else {
                    if (this.state.sign === "0") alert('Выберите степень!')
                    else {
                        Object.keys(form).map((key, index) => this.state[form[key]['name']] = form[key]['value'])
                        axios.post('/home/teacherDocs/create', this.state).then(res => {
                            if(res.data.status) {
                                this.listData.unshift(res.data.item);
                                $('#closeIt').trigger('click')
                            }
                        })
                    }
                }
                console.log('state data', this.state)
            },
            removeSend(e) {
                console.log('item', this.deleteItem)
                axios.post('/home/teacherDocs/destroy', this.deleteItem ).then(res => {
                    if (res.data.status) {
                        window.location.reload()
                    }
                })
              // window.location.href = '/home/teacherDocs/destroy/'+this.deleteItem.id
            },
            removeOpen(e, item) {
                e.preventDefault()
                console.log('openingModal')
                this.deleteItem = item
                $('#btn-deleteModal').trigger('click')
            },
            editOpen(e) {
                e.preventDefault()
                console.log('openingModal')
                $('#btn-editModal').trigger('click')
            },
            closeIt(e, id) {
                e.preventDefault()
                $('#' + id).removeClass('md-show');
            },
        }
    }
</script>

<style scoped lang="scss">
.input-group {
    span {
        text-transform: none !important;
    }
    .btn-warning {
        /*background: #f1c40f;*/
        /*border-color: #f1c40f;*/
    }

}

h3 {
    background: #01a9ac !important;
}
</style>
