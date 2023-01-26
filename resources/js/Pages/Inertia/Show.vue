<script setup>
import { Inartia, Inertia } from '@inertiajs/inertia'


defineProps({
  id: String,
  blog:Object
})

const deleteConfirm = id =>{
 Inertia.delete(`/inertia/${id}`,{
  onBefore: () =>confirm('本当に削除しますか')
 })
}
</script>

<template>
  {{ id }}
  {{ blog.title }}
  <button @click="deleteConfirm(blog.id)">削除</button>
</template>