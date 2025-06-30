<script setup>
    import Container from '../../Components/Container.vue';
    import PrimaryBtn from '../../Components/PrimaryBtn.vue'
    import SessionMessages from '../../Components/SessionMessages.vue'

    const form = useForm({})

    defineProps({
        status: String,
    })

    const submit = () => {
        form.post(route('verification.send'))
    }
</script>

<template>
    <Head tittle="- Email Verification" />

    <Container class="w-1/2">
        <div class="mb-8">
            <p>
                Obrigado por entrar!
            </p>
        </div>

        <SessionMessages :status="status" />

        <form @submit.prevent="submit">
            <PrimaryBtn :disabled="form.processing">Resend Verification Email</PrimaryBtn>
        </form>
    </Container>
</template>