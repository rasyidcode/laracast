<?php

class Team {

    protected $name;

    protected $members = [];

    public function __construct(string $name, array $members = []) {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params) {
        return new static(...$params);
    }

    public function name() {
        return $this->name;
    }

    public function members() {
        return $this->members;
    }

    public function add(Member $member) {
        $this->members[] = $member;
    }

    public function cancel() {
        // cancel member
    }

    public function manager() {
        // manager
    }

}

class Member {

    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

}

$bigD = new Team('Big D Team', [
    new Member('Jamil'),
    new Member('Jamil2')
]);

$rTeam = Team::start('R Team', [
    new Member('Jamilchan'),
    new Member('Al Rasyid')
]);

var_dump($bigD->members());
var_dump($rTeam->members());