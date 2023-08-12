<html>
             <head>
              </head>
              <body style="margin: 0; padding: 0; box-sizing: border-box;">
                <table align="center" cellpadding="0" cellspacing="0" width="95%">
                  <tr>
                    <td align="center">
                      <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-spacing: 2px 5px;" bgcolor="#fff">
                        <tr>
                          <td align="center" style="padding: 5px 5px 5px 5px;">
                            <a href="#">
                                <img src="<?= base_url() ?>assets/img/menu.jpg" alt="Logo" style="width:220px; border:0;"/>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td bgcolor="#fff">
                            <table cellpadding="0" cellspacing="0" width="100%%">
                              <tr>
                                <td style="padding: 10px 0 10px 0; font-family: Roboto, sans-serif; font-size: 20px; font-weight: 900">
                                  Verifikasi Akun Anda
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td bgcolor="#fff">
                            <table cellpadding="0" cellspacing="0" width="100%%">
                              <tr>
                                <td style="padding: 20px 0 20px 0; font-family: Roboto, sans-serif; font-size: 16px;">
                                  Hi, <span id="name">'. $this->input->post('email') .'</span>
                                </td>
                              </tr>
                              <tr>
                                <td style="padding: 0; font-family: Roboto, sans-serif; font-size: 16px;">
                                  Terima kasih telah mendaftar di Website UMKM Provinsi Sulut. Mohon konfirmasi email ini untuk mengaktifkan akun UMKM Anda.
                                </td>
                              </tr>
                              <tr>
                                <td style="padding: 20px 0 20px 0; font-family: Nunito, sans-serif; font-size: 16px; text-align: center;">
                                  <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">
                                  		<button style="background-color: #bb1724; border: none; color: white; padding: 15px 40px; text-align: center; display: inline-block; font-family: Nunito, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer;">
                                    Verifikasi Email
                                  </button>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td style="padding: 0; font-family: Roboto, sans-serif; font-size: 16px;">
                                  Jika Anda tidak membuat akun, silakan tinggalkan pesan ini.
                                </td>
                              </tr>
                              <tr>
                                <td style="padding: 50px 0; font-family: Roboto, sans-serif; font-size: 16px;">
                                  Admin,
                                  <p>PROVINSI SULAWESI UTARA</p>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </body>
            </html>