<template>
  <div>
    <div class>
      <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container">
          <a href class="navbar-brand">Employee Test</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <router-link to="/statistics" class="nav-item nav-link">Statistics</router-link>
              <router-link to="/" class="nav-item nav-link">Employees</router-link>
              <router-link to="/calendars" class="nav-item nav-link">Calendars</router-link>
              <router-link to="/clints" class="nav-item nav-link disabled">Clients</router-link>
            </div>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">
                <span class="glyphicon"></span>
                <i class="fas fa fa-envelope fa-2x rounded-circle"></i>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="glyphicon"></span>
                <i class="fas fa fa-bell-o fa-2x rounded-circle"></i>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="glyphicon"></span>
                <img src="/images/user-1.jpg" width="25%" class="rounded-circle" />
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
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
  border-bottom: 2px solid #a3c7d8;
}
</style>
