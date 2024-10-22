<template>
    <AuthLayout>
        <div class="nftmax-wc__form">
            <div class="nftmax-wc__form-inner">
                <div class="nftmax-wc__heading">
                    <h3 class="nftmax-wc__form-title nftmax-wc__form-title__one">Bienvenido</h3>
                </div>
                <!-- Sign in Form -->
                <LoginForm @login="handleLogin" />
                <!-- End Sign in Form -->
            </div>
        </div>
    </AuthLayout>
</template>

<script>
import AuthLayout from "../../layouts/AuthLayout.vue";
import LoginForm from "../../components/LoginForm.vue";
import {mapActions} from "vuex";
export default {
    components: {LoginForm, AuthLayout },
    data(){
        return{
            email:'example@quomodosoft.com',
            password:'1234'
        }
    },
    methods:{
        ...mapActions("auth", ["login"]),
        async handleLogin(credentials) {
            try {
                await this.login(credentials);
            }catch (e) {
                this.$vToastify.error("Invalid Credential");
            }
        }
    }
}

</script>
