import React from 'react'
import { Link } from 'react-router-dom'

export default function Home() {
  return (
    <div className="max-w-4xl mx-auto py-20 text-center">
      <h1 className="text-4xl font-bold mb-4">Papanie — Admin Portal</h1>
      <p className="text-gray-600 mb-8">A clean, responsive frontend scaffolded to work with your backend.</p>
      <div className="flex justify-center gap-4">
        <Link to="/signin" className="px-6 py-3 bg-blue-600 text-white rounded-md">Get started</Link>
        <a href="#docs" className="px-6 py-3 border rounded-md text-gray-700">Docs</a>
      </div>
    </div>
  )
}
