<?php
    class Admin extends AbstractUser
    {
        public function __construct(string $username, string $password, string $role)
        {
            parent::__construct($username, $password, "ADMIN");
        }

        public function changeMemberRole(Member $member) : void
        {
            $role_act=$member->getRole();

        if ($role_act==="MEMBER")
        {
            $member->setRole("PREMIUM_MEMBER");
        } 
        else 
        {
            $member->setRole("MEMBER");
        }
        }
    }
?>