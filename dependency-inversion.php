<?php

require_once 'vendor/autoload.php';

// 1. High-level modules should not depend on low-level modules. Both should depend on abstractions (e.g., interfaces).

// 2. Abstractions should not depend upon details. Details (concrete implementations) should depend upon abstractions.

// Problem Solved by Dependency Inversion
// The Dependency Inversion Principle addresses the problem of tightly coupled code, which often occurs when high-level modules are directly dependent on low-level modules. This tight coupling leads to:

// - Difficulty in modifying: Changes in the low-level module can affect the high-level module.
// - Challenges in testing: High-level modules are harder to test in isolation because they are directly dependent on the details of low-level modules.
