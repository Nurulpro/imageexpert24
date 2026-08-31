import AdminLayout from '@/Layouts/AdminLayout';
import { Head } from '@inertiajs/react';

function StatCard({ label, value }) {
    return (
        <div className="rounded-lg bg-white p-6 shadow">
            <div className="text-sm font-medium text-gray-500">{label}</div>
            <div className="mt-1 text-3xl font-bold text-gray-900">{value}</div>
        </div>
    );
}

export default function Dashboard({ subscriberCount, contactCount }) {
    return (
        <AdminLayout>
            <Head title="Dashboard" />

            <div className="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <StatCard label="Newsletter Subscribers" value={subscriberCount} />
                <StatCard label="Contact Form Submissions" value={contactCount} />
            </div>
        </AdminLayout>
    );
}
