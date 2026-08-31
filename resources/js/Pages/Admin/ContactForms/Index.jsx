import AdminLayout from '@/Layouts/AdminLayout';
import { Head, router } from '@inertiajs/react';

function formatDate(value) {
    return new Date(value).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
    });
}

export default function Index({ contacts }) {
    const handleDelete = (contact) => {
        if (confirm(`Delete message from "${contact.name}"?`)) {
            router.delete(`/ContactForms/${contact.id}`, { preserveScroll: true });
        }
    };

    return (
        <AdminLayout>
            <Head title="Contact Forms" />

            <div className="overflow-hidden bg-white shadow sm:rounded-lg">
                <div className="border-b border-gray-200 px-6 py-4">
                    <h1 className="text-lg font-medium text-gray-900">Contact Form Submissions</h1>
                </div>

                <div className="overflow-x-auto">
                    <table className="min-w-full divide-y divide-gray-200">
                        <thead className="bg-gray-50">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">ID</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Name</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Email</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Phone</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Subject</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Message</th>
                                <th className="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Received</th>
                                <th className="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody className="divide-y divide-gray-200 bg-white">
                            {contacts.map((contact) => (
                                <tr key={contact.id}>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{contact.id}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-900">{contact.name}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{contact.email}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{contact.phone}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{contact.subject}</td>
                                    <td className="max-w-xs truncate px-6 py-4 text-sm text-gray-500" title={contact.message}>
                                        {contact.message}
                                    </td>
                                    <td className="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{formatDate(contact.created_at)}</td>
                                    <td className="whitespace-nowrap px-6 py-4 text-right text-sm">
                                        <button
                                            onClick={() => handleDelete(contact)}
                                            className="font-medium text-red-600 hover:text-red-800"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            ))}

                            {contacts.length === 0 && (
                                <tr>
                                    <td colSpan={8} className="px-6 py-8 text-center text-sm text-gray-500">
                                        No contact form submissions yet.
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
