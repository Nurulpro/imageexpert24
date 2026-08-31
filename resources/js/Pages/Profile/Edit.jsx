import AdminLayout from '@/Layouts/AdminLayout';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm';
import { Head } from '@inertiajs/react';

export default function Edit({ mustVerifyEmail, status }) {
    return (
        <AdminLayout>
            <Head title="Profile" />

            <div className="space-y-6">
                <div className="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                    <div className="max-w-xl">
                        <UpdateProfileInformationForm mustVerifyEmail={mustVerifyEmail} status={status} />
                    </div>
                </div>

                <div className="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                    <div className="max-w-xl">
                        <UpdatePasswordForm />
                    </div>
                </div>

                <div className="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                    <div className="max-w-xl">
                        <DeleteUserForm />
                    </div>
                </div>
            </div>
        </AdminLayout>
    );
}
