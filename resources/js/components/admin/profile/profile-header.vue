<template>
    <div class="card-block user-info">
        <div class="col-md-12">
            <div class="media-left">
                <label for="avatar-d"  class="profile-image label-file">
                    <img class="user-img img-radius"
                         :src="this.avatar"
                         alt="user-img">
                    <span class="pager">
                        <i class="text-light  icofont icofont-upload"></i>
                    </span>
                </label>
                <input type="file" id="avatar-d"  class="d-none" @change="this.inputFile" accept="image/*"/>
            </div>
            <div class="media-body row">
                <div class="col-lg-12">
                    <div class="user-title">
                        <h2>{{this.name}}</h2>
                        <span class="text-white">{{this.is}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "profile-header",
        data() {
            return {
                user: null,
                name: null,
                is: 'Пользователь',
                avatar: '/public/admin/assets/images/user-profile/user-img.jpg'
            }
        },
        created() {
            axios.get('/user-init').then(res => {
                this.name = (res.data.teacher) ? res.data.teacher.name : res.data.user.name;
                (res.data.teacher && res.data.teacher.picture) ?  this.avatar = res.data.teacher.picture : null;
                (res.data.teacher && res.data.teacher.speciality) ?  this.is = res.data.teacher.speciality : null
            })
        },
        methods: {
            inputFile(e) {
                if (e.target.files[0]) {
                    let image = new FormData();
                    image.append('image', e.target.files[0]);
                    axios.post('/home/profile/avatar', image).then(res => {
                        console.log('send image ', res.data)
                        if (res.data.image) window.location.reload()
                    })
                }


            }
        }
    }
</script>

<style scoped>
    .user-img {
        position: relative;
        z-index: 99;
    }
    .pager {
        opacity: 0;
        position: absolute;
        top: 4%;
        height: 87%;
        width: 8%;
        margin-left: 5px;
        z-index: 999;
        background: rgba(236, 143, 5, 0.57);
        display: flex;
        align-content: center;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        text-align: center;
        transition: opacity 0.25s ease-in-out;
        border-radius: 5px;
        cursor: pointer;
    }
    .pager:hover {
        opacity: 1;
    }
    .user-img {
        max-width: 137px;
        max-height: 137px;
        object-fit: cover;
    }


</style>
