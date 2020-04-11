<template>
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example-1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>E-mail</th>
                        <th>Роль</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="userList" v-for="(user, index) in userList" >
                        <th scope="row">{{user.id}}</th>
                        <td class="tabledit-view-mode"  @click="cancelIt($event)"><span class="tabledit-span">{{user.name}}</span>
                        </td>
                        <td class="tabledit-view-mode" @click="cancelIt($event)"><span class="tabledit-span">{{user.email}}</span>
                        </td>
                        <td class="tabledit-view-mode" @click="changeIt">
                            <span class="tabledit-span" v-if="user.role === 'admin'">Администратор</span>
                            <span class="tabledit-span" v-else-if="user.role === 'teacher'">Учитель</span>
                            <span class="tabledit-span" v-else>Пользователь</span>
                            <select class="tabledit-input form-control input-sm" name="role" :value="user.role" style="display:none;"  @change="update($event, user.id)">
                                <option value="user">Пользователь</option>
                                <option value="teacher">Учитель</option>
                                <option value="admin">Администратор</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "list",
        props: {
            user_list: null
        },
        data() {
            return {
                userList: null,
                sendForm: {}
            }
        },
        created() {
            this.userList = (this.user_list) ? JSON.parse(this.user_list) : null
            console.log('userlist', this.userList)

        },
        methods: {

            changeIt(e) {

                $(e.target).find('.tabledit-span').hide()
                $(e.target).find('.tabledit-input').removeClass('d-none')
            },
            update(e, id) {
                    this.sendForm[$(e.target).attr('name')] = $(e.target).val();
                    this.sendForm.id = id
                axios.post('/home/users/update', this.sendForm).then(res => {
                    console.log('res data', res.data)
                });
            },
            cancelIt(e) {
                e.preventDefault()
                    $(e.target).find('span').css('display', 'block')
                    $('td').find('input').css('display', 'none')
            }
        }
    }
</script>

<style scoped>

</style>
