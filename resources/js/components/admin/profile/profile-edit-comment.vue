<template>
    <div class="edit-desc">
        <div class="col-md-12">
            <textarea name="comment" class="w-100" rows="5" placeholder="Введите текст о себе" v-model="comment"></textarea>
        </div>
        <div class="text-center">
            <a href="#!"
               class="btn btn-primary waves-effect waves-light m-r-20 m-t-20" @click="this.save">Сохранить</a>
            <a href="#!" id="edit-cancel-btn"
               class="btn btn-default waves-effect m-t-20 closeIt-comment">Отменить</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "profile-edit-comment",
        props: {
            userData: null,
        },
        data() {
            return {
                user: (this.userData) ? this.userData: null,
                formData: {
                    user_id: this.userData.id,
                },
                comment: this.userData.teacher.comment
            }
        },
        mounted() {
            // console.log('data is', this.comment)

        },
        methods: {
            save(e) {
                this.formData.comment = this.comment
                axios.post('/home/profile/update', this.formData).then(res => {
                    console.log('res data  ', res.data)
                    if (res.data.status) {
                        $('.closeIt-comment').trigger('click')
                        this.$emit('updated', res.data.data)
                    } else alert('Что то пошло не так, пожалуйста повторите снова чут позже!')
                })
                    .catch((e) => alert('Ошибка системы!')
                    )
            }
        }
    }
</script>

<style scoped lang="sass">
    textarea
        padding: 10px

</style>
