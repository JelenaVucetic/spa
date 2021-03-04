import Home from "./components/Home";
import About from "./components/About";
import ForgotPassword from "./components/ForgotPassword";
import ResetPasswordForm from "./components/ResetPasswordForm";
export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/reset-password',
            name: 'reset-password',
            component: ForgotPassword,
            meta: {
                auth:false
            }
        },
        {
            path: '/reset-password/:token',
            name: 'reset-password-form',
            component: ResetPasswordForm,
            meta: {
                auth:false
            }
        }

    ]
}
