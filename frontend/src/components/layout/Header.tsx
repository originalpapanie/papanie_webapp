import React from 'react'
import { Link } from 'react-router-dom'

export default function Header() {
  return (
    <header className="bg-white shadow">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between h-16 items-center">
          <Link to="/" className="text-xl font-semibold">Papanie</Link>
          <nav className="space-x-4">
            <Link to="/dashboard" className="text-sm text-gray-600 hover:text-gray-900">Dashboard</Link>
            <Link to="/signin" className="text-sm text-gray-600 hover:text-gray-900">Sign in</Link>
          </nav>
        </div>
      </div>
    </header>
  )
}
