<template>
    <section class="nftmax-wc nftmax-wc__full">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-xxl-6 col-lg-6 col-12 nftmax-hidden-rp">
                    <div class="nftmax-wc__inner nft-gr-primary">
                        <!-- Logo -->
                        <div class="nftmax-wc__logo">
<!--                            <a href="/"><img src="http://vehicle-enrollment-app.test/assets/img/logo.png" alt="#"></a>-->
                        </div>
                        <!-- Middle Image -->
                        <div class="nftmax-wc__middle">
                            <a href="/"><img src="http://vehicle-enrollment-app.test/assets/img/auth/fondopnp.png" alt="#"></a>
                        </div>
                        <!-- Welcome Heading -->
                        <div class="nftmax-wc__heading">
                            <h2 class="nftmax-wc__title">Sistema de Enrolamiento Vehicular</h2>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6 col-12">
                    <!-- Welcome Form -->
                    <slot></slot>
                    <!-- End Welcome Form -->
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {

}
</script>

<style scoped>

</style>
