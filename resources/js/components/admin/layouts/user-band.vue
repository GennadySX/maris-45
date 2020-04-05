<template>
    <div class="dropdown-toggle" data-toggle="dropdown">
        <img :src="this.avatar" class="img-radius" />
        <span>{{this.name}}</span>
        <i class="feather icon-chevron-down"></i>
    </div>
</template>

<script>
    export default {
        name: "user-band",
        data() {
            return {
                user: null,
                name: null,
                avatar: '/public/admin/assets/images/user-profile/user-img.jpg'
            }
        },
        created() {
            axios.get('/user-init').then(res => {
                this.name = (res.data.teacher) ? res.data.teacher.name : res.data.user.name;
                (res.data.teacher && res.data.teacher.picture) ?  this.avatar = res.data.teacher.picture : null
            })
        },
    }
</script>

<style scoped>

</style>
