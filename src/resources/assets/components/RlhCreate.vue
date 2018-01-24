<template>
    <div class="row">
        <div class="col-lg-12">
            <b-card class="mb-2 bg-default-card" header="Tambah Rumah Layak Huni (RLH) Provinsi Banten" header-tag="h4">
                <div>
                    <vue-form :state="formstate" @submit.prevent="onSubmit">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="rlhprovinsiProvinceKode"> Provinsi</label>
                                        <select name="rlhprovinsiProvinceKode" class="form-control" id="rlhprovinsiProvinceKode" v-model="rlhprovinsiProvinceKode" @change="getKota()" required checkbox>
                                            <option value="0" selected disabled>Pilih Provinsi</option>
                                            <option :value="province.provinsi_kode" v-for="province in provinces">
                                                {{ province.provinsi_nama }}
                                            </option>
                                        </select>
                                        <field-messages name="rlhprovinsiProvinceKode" show="$invalid && $submitted" class="text-danger">
                                            <div slot="checkbox">Provinsi dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="rlhprovinsiKotaKode"> Kota</label>
                                        <select name="rlhprovinsiKotaKode" class="form-control" id="rlhprovinsiKotaKode" v-model="rlhprovinsiKotaKode" required checkbox>
                                            <option value="0" selected disabled>Pilih Kota</option>
                                            <option :value="city.kota_kode" v-for="city in cities">
                                                {{ city.kota_nama }}
                                            </option>
                                        </select>
                                        <field-messages name="rlhprovinsiKotaKode" show="$invalid && $submitted" class="text-danger">
                                            <div slot="checkbox">Kota dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="rlhprovinsiTgl"> Tanggal</label>
                                        <input type="date" name="rlhprovinsiTgl" class="form-control input-sm" id="rlhprovinsiTgl" value="yyyy-mm-dd" aria-selected="true" v-model="rlhprovinsiTgl" required>
                                        <field-messages name="rlhprovinsiTgl" show="$invalid && $submitted" class="text-danger">
                                            <div slot="required">Tanggal dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <validate tag="div">
                                        <label for="rlhprovinsiValue"> Jumlah</label>
                                        <input type="number" name="rlhprovinsiValue" class="form-control input-sm" id="rlhprovinsiValue" placeholder="Masukkan Jumlah" v-model="rlhprovinsiValue" required>
                                        <field-messages name="rlhprovinsiValue" show="$invalid && $submitted" class="text-danger">
                                            <div slot="required">Jumlah dibutuhkan.</div>
                                        </field-messages>
                                    </validate>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <b-button type="submit" size="md" variant="primary">
                                        <i class="ti-save"></i> Simpan
                                    </b-button>
                                    <router-link to="/" class="btn btn-danger"><i class="ti-arrow-left"></i> KEMBALI</router-link>
                                </div>
                            </div>
                        </div>
                    </vue-form>
                </div>
            </b-card>
        </div>
    </div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
export default {
    name: "lrhcreate",
    data() {
        return {
            provinces: [],
            cities: [],
            rlhprovinsiProvinceKode: 0,
            rlhprovinsiKotaKode: 0,
            rlhprovinsiTgl: "",
            rlhprovinsiValue: 0,
            formstate: {}
        }
    },
    methods: {
        onSubmit: function() {
            if (this.formstate.$invalid) {
                return;
            } else {
                axios.post('/create', {
                    rlhprovinsiProvinceKode: this.rlhprovinsiProvinceKode,
                    rlhprovinsiKotaKode: this.rlhprovinsiKotaKode,
                    rlhprovinsiTgl: this.rlhprovinsiTgl,
                    rlhprovinsiValue: this.rlhprovinsiValue
                })
                .then(response => {
                    this.$router.push({ name: 'list'})
                })
                .catch(function(error) {});
            }

        },
        getKota: function () {
            var val = this.rlhprovinsiProvinceKode;
            axios.get("/getKota/"+val)
                .then(response => {
                    this.cities = response.data;
                })
                .catch(function(error) {});
        }
    },
    mounted: function() {
        axios.get("/getProvinsi")
            .then(response => {
                this.provinces = response.data;
            })
            .catch(function(error) {});
    },
    destroyed: function() {

    }
}
</script>