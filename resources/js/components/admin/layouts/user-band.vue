<template>
    <div class="dropdown-primary dropdown">
        <div class="dropdown-toggle" data-toggle="dropdown">
            <img :src="this.avatar" class="img-radius d-img" />
            <span>{{this.name}}</span>
            <i class="feather icon-chevron-down"></i>
        </div>
        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
            <li>
                <a href="/home">
                    <i class="feather icon-user"></i> Профиль
                </a>
            </li>

            <li>
                <a href="#" @click="logout($event)">
                    <i class="feather icon-log-out"></i> Выйти
                </a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    <slot></slot>
                    <button type="submit">send</button>
                </form>
            </li>
        </ul>
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
        methods: {
            logout(e) {
                e.preventDefault()
                console.log('method run')
                $('#logout-form').submit()
            }
        }
    }
</script>

<style scoped>

    .d-img {
        width: 30px;
        height: 30px;
        object-fit: cover;
    }
</style>
