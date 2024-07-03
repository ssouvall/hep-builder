<template>
  <div>
  <h1>My Inertia CRUD blah blah blah</h1>
  <table>
    <thead>
      <tr>
        <th v-for="header in headers" :key="header">
          {{ header }}
        </th>
      </tr>
      </thead>
      <tbody>
        <tr v-for="exercise in exercises" :key="exercise.id">
          <td>{{ exercise.title }}</td>
          <td>{{ exercise.description }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
defineProps({
  exercises: {
    type: Array,
    default: () => [],
  },
});

const headers = ["exercises", "description"];
</script>