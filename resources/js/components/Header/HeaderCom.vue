<template>
    <header class="nftmax-header" :class="[drawer?'':'nftmax-close']">

    </header>
</template>

<script>
export default {
    props:{
        drawer:Boolean
    },
    data(){
        return{
            wallerModal:false
        }
    },
    methods:{
        walletModalHandler(){
            this.wallerModal=!this.wallerModal
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
