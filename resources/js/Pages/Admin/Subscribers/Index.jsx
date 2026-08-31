import AdminLayout from '@/Layouts/AdminLayout';
import { Head, router } from '@inertiajs/react';

function formatDate(value) {
    return new Date(value).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
    });
}

export default function Index({ subscribers }) {
    const handleDelete = (subscriber) => {
        if (confirm(`Delete subscriber "${subscriber.email}"?`)) {
            router.delete(`/SubscriberList/${subscriber.id}`, { preserveScroll: true });
        }
    };

    return (
        <AdminLayout>
            <Head title="Subscribers" />

            <div className="overflow-hidden bg-white shadow sm:rounded-lg">
                <div className="border-b border-gray-200 px-6 py-4">
                    <h1 className="text-lg font-medium text-gray-900">Newsletter Subscribers</h1>
                </div>

                <div className="overflow-x-auto">
                    <table className="min-w-full divide-y divide-gray-200">
                        <thead className="bg-gray-50">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">ID</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Email</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Subscribed</th>
                                <th className="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody className="divide-y divide-gray-200 bg-white">
                            {subscribers.map((subscriber) => (
                                <tr key={subscriber.id}>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{subscriber.id}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-900">{subscriber.email}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{formatDate(subscriber.created_at)}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-right text-sm">
                                        <button
                                            onClick={() => handleDelete(subscriber)}
                                            className="font-medium text-red-600 hover:text-red-800"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            ))}

                            {subscribers.length === 0 && (
                                <tr>
                                    <td colSpan={4} className="px-6 py-8 text-center text-sm text-gray-500">
                                        No subscribers yet.
                                    </td>
                                </tr>
                            )}
                        </tbody>
                    </table>
                </div>
            </div>
        </AdminLayout>
    );
}
