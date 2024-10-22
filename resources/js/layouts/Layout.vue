<template>
    <div>
        <SideBar @logoutModalHandler="logoutModalHandler" :drawer="this.$store.state.layoutDrawer" />
        <HeaderCom @walletModalHandler="walletModalHandler" @logoutModalHandler="logoutModalHandler" :drawer="this.$store.state.layoutDrawer" />
        <section class="nftmax-adashboard nftmax-show" :class="[this.$store.state.layoutDrawer?'':'nftmax-close']">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-9 col-12 nftmax-main__column">
                        <div class="nftmax-body">
                            <!-- Dashboard Inner -->
                            <div class="nftmax-dsinner">
                                <router-view></router-view>
                            </div>
                            <!-- End Dashboard Inner -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import HeaderCom from "../components/Header/HeaderCom.vue";
import SideBar from "../components/SideBar/SideBar.vue";

export default {
    components: {SideBar, HeaderCom},
    data(){
        return{
            logoutModal:false,
            wallerModal:false
        }
    },
    methods:{
        logoutModalHandler(){
            this.logoutModal=!this.logoutModal
        },
        doLogout(){
            this.logoutModal=false
            localStorage.removeItem("email");
            localStorage.clear();
            this.$router.push('/login')
            this.$vToastify.success("🙂 Come back soon");

        },
        walletModalHandler(){
            this.wallerModal=!this.wallerModal
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
