import React from 'react'

export default function Dashboard() {
  return (
    <div className="max-w-7xl mx-auto py-8">
      <h1 className="text-2xl font-semibold mb-4">Dashboard</h1>
      <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div className="p-4 bg-white rounded shadow">Overview card</div>
        <div className="p-4 bg-white rounded shadow">Stats card</div>
        <div className="p-4 bg-white rounded shadow">Activity</div>
      </div>
    </div>
  )
}
