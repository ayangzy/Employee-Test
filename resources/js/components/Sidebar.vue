<template>
  <ul class="sidebar-navigation">
    <li class="mt-4">
      <router-link to="/" class>
        <button type="button" class="btn btn-success btn-circle">
          <i class="fa fa-eye" aria-hidden="true"></i>
        </button> All Employees
      </router-link>
    </li>

    <li>
      <router-link to="/create-employee">
        <button type="button" class="btn btn-primary btn-circle">
          <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
        Create Employees
      </router-link>
    </li>

    <li>
      <router-link to="/clients">
        <button type="button" class="btn btn-default btn-circle">
          <i class="fa fa-user" aria-hidden="true"></i>
        </button>
        Clients
      </router-link>
    </li>

    <li>
      <router-link to="/calender">
        <button type="button" class="btn btn-success btn-circle">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </button>
        Calendars
      </router-link>
    </li>

    <li>
      <router-link to="/statistics">
        <button type="button" class="btn btn-info btn-circle">
          <i class="fa fa-graph" aria-hidden="true"></i>
        </button>
        Statistics
      </router-link>
    </li>
  </ul>
</template>

<script>
export default {
  data() {
    return {};
  }
};
</script>

<style scoped>
a.router-link-exact-active {
  color: #191818;
  background: #a3c7d8;
}
</style>
