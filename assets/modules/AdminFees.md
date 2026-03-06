 xcategory = Trim(ttype.Text) + " " + Trim(tclass.Text)
             Select Case xcategory
                Case "TRICYCLE FOR HIRE"
                    If Trim(Frmmain.tmode.Text) = "NEW" Then
                        rsBills.Fields("FRANCHISE") = 175#
                        rsBills.Fields("MAYORS") = 100
                        rsBills.Fields("ASTICKER") = 50
                        rsBills.Fields("ROAD") = 25
                        rsBills.Fields("VSTICKER") = 25
                        rsBills.Fields("ID") = 30
                        rsBills.Fields("RPLATE") = 150#
                        rsBills.Fields("TOTAL") = 555
                    
                    ElseIf Trim(Frmmain.tmode.Text) = "RENEWAL" Then
                        rsBills.Fields("FRANCHISE") = 175#
                        rsBills.Fields("MAYORS") = 100
                        rsBills.Fields("ASTICKER") = 50
                        rsBills.Fields("ROAD") = 25
                        rsBills.Fields("VSTICKER") = 25
                        rsBills.Fields("ID") = 30
                        rsBills.Fields("TOTAL") = 405
                    End If
                
                Case "TRICYCLE FOR SUPERVISION"
                    rsBills.Fields("CONFIRM") = 10
                    rsBills.Fields("MAYORS") = 410
                    rsBills.Fields("ASTICKER") = 50
                    rsBills.Fields("ID") = 30
                    rsBills.Fields("TOTAL") = 500
                
                Case "TRICYCLE PRIVATE"
                    rsBills.Fields("CONFIRM") = 200
                    rsBills.Fields("PRIVATE") = 80
                    rsBills.Fields("ASTICKER") = 25
                    rsBills.Fields("TOTAL") = 305
                
                Case "PEDICAB FOR HIRE"
                    rsBills.Fields("FRANCHISE") = 150
                    rsBills.Fields("MAYORS") = 100
                    rsBills.Fields("ASTICKER") = 50
                    rsBills.Fields("ID") = 30
                    rsBills.Fields("TOTAL") = 330
                
                Case "PEDICAB FOR SUPERVISION"
                    rsBills.Fields("FRANCHISE") = 150
                    rsBills.Fields("MAYORS") = 100
                    rsBills.Fields("ASTICKER") = 50
                    rsBills.Fields("ID") = 30
                    rsBills.Fields("TOTAL") = 330
                
                Case "PEDICAB PRIVATE"
                    rsBills.Fields("FRANCHISE") = 150
                    rsBills.Fields("MAYORS") = 100
                    rsBills.Fields("ASTICKER") = 50
                    rsBills.Fields("ID") = 30
                    rsBills.Fields("TOTAL") = 330
            End Select