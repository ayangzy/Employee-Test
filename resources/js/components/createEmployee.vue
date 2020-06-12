<template>
  <div>
    <Header></Header>
    <div class="container">
      <section class="py-5 bg-light">
        <div class="row">
          <div class="col-md-6">
            <h1>Employee</h1>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <router-link
                to="/create-employee"
                class="btn btn-primary rounded-pill"
              >Add New Employee</router-link>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-light">
        <div class="row">
          <div class="col-md-3">
            <div class="sidebar-container shadow-lg">
              <Sidebar></Sidebar>
            </div>
          </div>

          <div class="col-md-9">
            <div class="card shadow-sm">
              <div class="card-header">
                <h2 class="card-title">Add New Employee</h2>
              </div>
              <div class="card-body">
                <form @submit.prevent="createEmployee()" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="employee">Employee Name</label>
                    <input type="text" name="name" v-model="employees.name" class="form-control" />
                    <span v-if="errors.name" class="errors">{{errors.name[0]}}</span>
                  </div>

                  <div class="form-group">
                    <label for="employee">Employee Position</label>
                    <input
                      type="text"
                      name="position"
                      v-model="employees.position"
                      class="form-control"
                    />
                    <span v-if="errors.position" class="errors">{{errors.position[0]}}</span>
                  </div>

                  <div class="form-group">
                    <label for="employee">Employee Salary</label>
                    <input
                      type="text"
                      name="salary"
                      v-model="employees.salary"
                      class="form-control"
                    />
                    <span v-if="errors.salary" class="errors">{{errors.salary[0]}}</span>
                  </div>

                  <div class="form-group">
                    <label>Nature of Employement</label>
                    <select
                      class="form-control"
                      v-model="employees.employmentType"
                      name="employmentType"
                    >
                      <option value selected="selected">Please Select one</option>
                      <option>Full time</option>
                      <option>Part time</option>
                    </select>

                    <span v-if="errors.employmentType" class="errors">{{errors.employmentType[0]}}</span>
                  </div>

                  <div class="form-group">
                    <label for="employee">Employee Status</label>
                    <input
                      type="text"
                      name="status"
                      v-model="employees.status"
                      class="form-control"
                    />
                    <span v-if="errors.status" class="errors">{{errors.status[0]}}</span>
                  </div>

                  <!-- <div class="form-group">
                    <label for="employee">Employee Photo</label>
                    <input type="file" name="photo" class="form-control" />
                    <span v-if="errors.photo" class="errors">{{errors.photo[0]}}</span>
                  </div>-->

                  <div class="form-group">
                    <button class="btn btn-primary">Save Employee</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
import Swal from "sweetalert2";
import Header from "../components/Header";
import Sidebar from "../components/Sidebar";
import axios from "axios";
export default {
  components: {
    Header,
    Sidebar
  },

  data() {
    return {
      employees: {
        name: "",
        position: "",
        salary: "",
        employmentType: "",
        status: ""
      },

      errors: {}
    };
  },

  methods: {
    createEmployee() {
      axios
        .post("/api/employees", this.employees)
        .then(response => {
          Swal.fire({
            position: "top-end",
            type: "success",
            title: "Successfully added an Employee!",
            showConfirmButton: false,
            timer: 6000
          });
          this.$router.push("/");
        })
        .catch(error => {
          this.errors = error.response.data.errors;
        });

      this.errors = false;
    }
  }
};
</script>

<style>
.errors {
  color: #f31111;
}
</style>
