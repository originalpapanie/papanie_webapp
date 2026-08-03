import React from 'react'
import { useForm } from 'react-hook-form'
import api from '../../lib/api'

type FormValues = {
  email: string
  password: string
}

export default function SignIn() {
  const { register, handleSubmit } = useForm<FormValues>()

  const onSubmit = async (data: FormValues) => {
    try {
      const res = await api.post('/auth/login', data)
      console.log('login success', res.data)
      // TODO: store tokens / redirect
    } catch (err) {
      console.error(err)
      alert('Sign in failed')
    }
  }

  return (
    <div className="max-w-md mx-auto py-16">
      <h2 className="text-2xl font-semibold mb-6">Sign in</h2>
      <form onSubmit={handleSubmit(onSubmit)} className="space-y-4">
        <div>
          <label className="block text-sm font-medium text-gray-700">Email</label>
          <input {...register('email')} type="email" className="mt-1 block w-full border rounded-md p-2" />
        </div>

        <div>
          <label className="block text-sm font-medium text-gray-700">Password</label>
          <input {...register('password')} type="password" className="mt-1 block w-full border rounded-md p-2" />
        </div>

        <div>
          <button type="submit" className="w-full bg-blue-600 text-white py-2 rounded-md">Sign in</button>
        </div>
      </form>
    </div>
  )
}
