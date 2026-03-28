import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React from 'react';
import { Plus, MessageCircle, Wallet, AlertCircle, PieChart } from 'lucide-react';

const StatCard = ({ title, value, icon, color }) => (
    <div className="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex flex-col gap-4">
        <div className="flex justify-between items-start">
            <span className="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight w-2/3">
                {title}
            </span>
            <div className="p-2 bg-slate-50 rounded-lg">
                {React.cloneElement(icon, { size: 20 })}
            </div>
        </div>
        <div className={`text-2xl font-bold ${color}`}>{value}</div>
    </div>
);

export default function Dashboard(props) {

    const arrears = [
        { id: 1, name: 'John Ndegwa', unit: 'Unit A4', amount: '8,000', days: '3 days overdue', initial: 'JN' },
        { id: 2, name: 'Sarah Otieno', unit: 'Unit B12', amount: '12,500', days: '5 days overdue', initial: 'SO' },
        { id: 3, name: 'Moses Kamau', unit: 'Unit C1', amount: '15,000', days: '7 days overdue', initial: 'MK' },
        { id: 4, name: 'Lucy Wambui', unit: 'Unit A2', amount: '4,500', days: '2 days overdue', initial: 'LW' },
        { id: 5, name: 'David Mutua', unit: 'Unit B9', amount: '5,000', days: '1 day overdue', initial: 'DM' },
    ];

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">EstateFlow Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <div className="min-h-screen bg-slate-50 font-sans text-slate-900">

                        {/* Navigation */}
                        <nav className="bg-white border-b border-slate-200 px-8 py-4 flex items-center justify-between">
                            <div className="flex items-center gap-12">
                                <h1 className="text-xl font-bold text-slate-800">EstateFlow</h1>

                                <div className="flex gap-8 text-sm font-medium text-slate-500">
                                    <a href="#" className="text-slate-900 border-b-2 border-slate-900 pb-1">Home</a>
                                    <a href="#" className="hover:text-slate-900">Properties</a>
                                    <a href="#" className="hover:text-slate-900">Tenants</a>
                                    <a href="#" className="hover:text-slate-900">Reports</a>
                                </div>
                            </div>

                            <button className="bg-slate-700 hover:bg-slate-800 text-white px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium transition-colors">
                                <Plus size={18} /> Add Property
                            </button>
                        </nav>

                        <main className="max-w-7xl mx-auto p-8">

                            {/* Stats */}
                            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                                <StatCard
                                    title="TOTAL RENT COLLECTED THIS MONTH"
                                    value="KES 250,000"
                                    icon={<Wallet />}
                                    color="text-emerald-600"
                                />

                                <StatCard
                                    title="PENDING ARREARS"
                                    value="KES 45,000"
                                    icon={<AlertCircle />}
                                    color="text-rose-700"
                                />

                                <StatCard
                                    title="OCCUPANCY RATE"
                                    value="92%"
                                    icon={<PieChart />}
                                    color="text-slate-900"
                                />
                            </div>

                            {/* Arrears */}
                            <div className="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">

                                <div className="p-6 border-b border-slate-50 flex justify-between items-center">
                                    <h2 className="text-lg font-semibold text-slate-800">Priority Arrears</h2>
                                    <span className="text-xs font-bold text-slate-400 uppercase tracking-wider">
                                        Top 5 Overdue
                                    </span>
                                </div>

                                <div className="divide-y divide-slate-50">
                                    {arrears.map((tenant) => (
                                        <div key={tenant.id} className="p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">

                                            <div className="flex items-center gap-4">
                                                <div className="w-10 h-10 rounded-lg bg-slate-100 flex items-center justify-center font-bold text-slate-500 text-xs">
                                                    {tenant.initial}
                                                </div>

                                                <div>
                                                    <p className="font-semibold text-slate-800 text-sm">{tenant.name}</p>
                                                    <p className="text-xs text-slate-400">{tenant.unit}</p>
                                                </div>
                                            </div>

                                            <div className="flex items-center gap-12">

                                                <div className="text-right">
                                                    <p className="text-rose-600 font-bold text-sm">KES {tenant.amount}</p>
                                                    <p className="text-[10px] uppercase font-semibold text-slate-400">
                                                        {tenant.days}
                                                    </p>
                                                </div>

                                                <button className="flex items-center gap-2 border border-slate-200 px-4 py-2 rounded-lg text-xs font-semibold text-slate-600 hover:bg-white hover:shadow-sm transition-all">
                                                    <MessageCircle size={14} /> WhatsApp Nudge
                                                </button>

                                            </div>

                                        </div>
                                    ))}
                                </div>

                            </div>

                        </main>
                    </div>

                </div>
            </div>

        </AuthenticatedLayout>
    );
}