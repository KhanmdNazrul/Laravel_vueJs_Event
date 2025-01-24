
<script>
export default {
    name: 'ComingSoonPage',
    data() {
        return {
            countdownTime: '2025/01/10',
        };
    },
    mounted() {
        this.initCountdown();
    },
    methods: {
        initCountdown() {
            const countdownElement = this.$el.querySelector('.coming-soon-countdown');
            if (countdownElement) {
                $(countdownElement).countdown(this.countdownTime, function (event) {
                    $(this).html(event.strftime('%D days %H:%M:%S'));
                });
            }
        },
    },
};
</script>




<template>
    <section class="coming-soon-page page-header">
        <div class="coming-soon-page__bg"
            :style="{ backgroundImage: 'url(/src/assets/images/backgrounds/coming-soon-page-bg.jpg)' }"></div>
        <div class="coming-soon-page__content">
            <div class="inner">
                <div class="big-title">Events are Only</div>
                <div class="timer-box clearfix">
                    <div class="countdown-timer">
                        <div class="default-coundown">
                            <div class="box">
                                <div style="font-size: 100px; font-weight: bold;" class="countdown coming-soon-countdown" :data-countdown-time="countdownTime"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>



