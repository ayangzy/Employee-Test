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
            <div class="row">
              <div class="col-md-4">
                <input type="checkbox" class="checkbox" />
                EMPLOYEE
                <i class="fa fa-arrow-up"></i>
              </div>
              <div class="col-md-3">
                SALARY
                <i class="fa fa-arrow-up"></i>
              </div>

              <div class="col-md-3">
                STATUS
                <i class="fa fa-arrow-down"></i>
              </div>

              <div class="col-md-2">MANAGE</div>

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 bg-white rounded mt-2 p-2">
                    <input type="checkbox" class="check-box" />
                    <img src="/images/user-2.jpg" width="15%" class="rounded-circle mr-2" />
                    <!-- <img :src="employees.photo" width="15%" class="rounded-circle mr-2" /> -->
                    <span class="name">{{ employee.name }}</span>
                    <br />
                    <span class="name">{{ employee.position }}</span>
                  </div>
                  <div class="col-md-3 bg-white mt-2 p-2">
                    {{employee.salary}}
                    <br />
                    {{ employee.employmentType }}
                  </div>

                  <div class="col-md-3 bg-white mt-2 p-2">
                    {{employee.status}}
                    <br />
                    {{ getHumanDate(employee.created_at) }}
                  </div>

                  <div class="col-md-2 bg-white rounded mt-2 p-2">
                    <router-link
                      :to="{name:'edit-employee', params:{id:employee.id}}"
                      class="btn btn-primary btn-sm"
                    >
                      <i class="fa fa-pencil" title="Edit an Employee"></i>
                    </router-link>|
                    <button @click="deleteEmployee(employee.id)" class="btn btn-danger btn-sm">
                      <i class="icon fa fa-trash" title="Delete an Employee"></i>
                    </button>
                  </div>
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
import moment from "moment";
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
    getHumanDate: function(date) {
      let fromTime = moment(date).diff(moment(), "milliseconds");
      let duration = moment.duration(fromTime);
      let years = duration.years() / -1;
      let months = duration.months() / -1;
      let days = duration.days() / -1;
      if (years > 0) {
        var Ys = years == 1 ? years + " year and " : years + " years and ";
        var Ms = months == 1 ? months + " month" : months + " months";
        return Ys + Ms;
      } else {
        if (months > 0)
          return months == 1 ? months + " month" : months + " months";
        else return days == 1 ? days + " day" : days + " days";
      }
    },

    showEmployee(id) {
      axios
        .get(`/api/employees/${id}`)
        .then(response => {
          this.employees.id = response.data.id;
          this.employees.name = response.data.name;
          this.employees.position = response.data.position;
        })
        .catch(err => {
          console.log(err);
        });

      //   this.edit = true;
      //   this.errors = false;
    },

    deleteEmployee(id) {
      Swal.fire({
        title: "Are you sure you want to delete this Employee?",

        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.value) {
          axios
            .delete(`/api/employees/${id}`)
            .then(res => {
              Swal.fire(
                "Deleted!",
                "Employee successfully deleted.",
                "success"
              );

              this.$router.push("/");
            })
            .catch(() => {
              swal("Failed", "There was something wrong", "warning");
            });
        }
      });
    }
  }
};
</script>
