<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card card-default">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">
                        <form autocomplete="off" @submit.prevent="requestResetPassword" method="post">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: null,
                has_error: false
            }
        },
        methods: {
            requestResetPassword() {
                axios.post('/reset-password', {
                    email: this.email
                })
                .then((response) => {
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.error(error.response);
                });
            }
        }
    }
</script>
