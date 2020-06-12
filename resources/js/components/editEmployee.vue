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
            <div class>
              <div class="card shadow-sm">
                <div class="card-header">
                  <h2 class="card-title">Update Employee</h2>
                </div>
                <div class="card-body">
                  <form enctype="multipart/form-data" @submit.prevent="updateEmployee(employee.id)">
                    <div class="form-group">
                      <label for="employee">Employee Name</label>
                      <input type="text" name="name" v-model="employee.name" class="form-control" />
                    </div>

                    <div class="form-group">
                      <label for="employee">Employee Position</label>
                      <input
                        type="text"
                        name="position"
                        v-model="employee.position"
                        class="form-control"
                      />
                    </div>

                    <div class="form-group">
                      <label for="employee">Employee Salary</label>
                      <input
                        type="text"
                        name="salary"
                        v-model="employee.salary"
                        class="form-control"
                      />
                    </div>

                    <div class="form-group">
                      <label>Type of Employement</label>
                      <select
                        class="form-control"
                        v-model="employee.employmentType"
                        name="employmentType"
                      >
                        <option>Full time</option>
                        <option>Part time</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="employee">Employee Status</label>
                      <input
                        type="text"
                        name="status"
                        v-model="employee.status"
                        class="form-control"
                      />
                    </div>

                    <!-- <div class="form-group">
                      <label for="employee">Employee Photo</label>
                      <input type="file" name="photo" class="form-control" />
                      <img :src="employee.photo" width="20%" />
                    </div>-->

                    <div class="form-group">
                      <button class="btn btn-primary">Update Employee</button>
                    </div>
                  </form>
                </div>
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
      employee: {}
    };
  },

  created() {
    axios
      .get(`/api/employees/${this.$route.params.id}`)
      .then(response => {
        console.log(response.data);
        this.employee = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  },

  methods: {
    updateEmployee(id) {
      let self = this;
      let params = Object.assign({}, self.employee);
      axios
        .put("/api/employees/" + id, params)
        .then(response => {
          setTimeout(() => {
            window.location = "/";
          }, 2500);

          Swal.fire({
            position: "top-center",
            type: "success",
            title: "Employee successully updated",
            showConfirmButton: false
          });
        })

        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>
