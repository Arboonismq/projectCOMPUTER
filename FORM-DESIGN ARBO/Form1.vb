Public Class Form1
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles btnShow.Click
        MsgBox("Hello ICT-4 " + txtBox1.Text + vbCrLf + vbCrLf + vbCrLf + "Would you like to continue?", MsgBoxStyle.Critical, "Warning!")

    End Sub



    Private Sub btClear_Click(sender As Object, e As EventArgs) Handles btClear.Click
        txtBox1.Text = ""

    End Sub
End Class
