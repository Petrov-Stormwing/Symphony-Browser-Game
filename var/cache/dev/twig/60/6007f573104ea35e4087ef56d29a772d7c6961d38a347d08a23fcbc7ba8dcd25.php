<?php

/* features/rules.html.twig */
class __TwigTemplate_a7eec254979d31d51e75354cc3daeeb964146899d8389896305005f53335c046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "features/rules.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5319749eae6d52ea3426f7a72a95108c5862d7c975796aef3a1845cd172af07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5319749eae6d52ea3426f7a72a95108c5862d7c975796aef3a1845cd172af07f->enter($__internal_5319749eae6d52ea3426f7a72a95108c5862d7c975796aef3a1845cd172af07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "features/rules.html.twig"));

        $__internal_6ccaef6321eafdfd29cd7418ceb355816565ff8bf1877116eeb27ab5af032ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccaef6321eafdfd29cd7418ceb355816565ff8bf1877116eeb27ab5af032ca7->enter($__internal_6ccaef6321eafdfd29cd7418ceb355816565ff8bf1877116eeb27ab5af032ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "features/rules.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5319749eae6d52ea3426f7a72a95108c5862d7c975796aef3a1845cd172af07f->leave($__internal_5319749eae6d52ea3426f7a72a95108c5862d7c975796aef3a1845cd172af07f_prof);

        
        $__internal_6ccaef6321eafdfd29cd7418ceb355816565ff8bf1877116eeb27ab5af032ca7->leave($__internal_6ccaef6321eafdfd29cd7418ceb355816565ff8bf1877116eeb27ab5af032ca7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f783542ac93c4d0caffdde1265237016b630d60371badfba2dd5e8aa0105e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f783542ac93c4d0caffdde1265237016b630d60371badfba2dd5e8aa0105e81->enter($__internal_4f783542ac93c4d0caffdde1265237016b630d60371badfba2dd5e8aa0105e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2343d8da95e20d5c6ab264408d2f1efb5f1682fd2babfea3427028d36e97d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2343d8da95e20d5c6ab264408d2f1efb5f1682fd2babfea3427028d36e97d16->enter($__internal_f2343d8da95e20d5c6ab264408d2f1efb5f1682fd2babfea3427028d36e97d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Rules
";
        
        $__internal_f2343d8da95e20d5c6ab264408d2f1efb5f1682fd2babfea3427028d36e97d16->leave($__internal_f2343d8da95e20d5c6ab264408d2f1efb5f1682fd2babfea3427028d36e97d16_prof);

        
        $__internal_4f783542ac93c4d0caffdde1265237016b630d60371badfba2dd5e8aa0105e81->leave($__internal_4f783542ac93c4d0caffdde1265237016b630d60371badfba2dd5e8aa0105e81_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_d6a937ef6b32f5e7f0ef55f077bd8a50ed8ad983a85eb6dcad79575852654240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a937ef6b32f5e7f0ef55f077bd8a50ed8ad983a85eb6dcad79575852654240->enter($__internal_d6a937ef6b32f5e7f0ef55f077bd8a50ed8ad983a85eb6dcad79575852654240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_18a1bf39830c74979d6d6e9c097233890cbfe02359fe949d3546ea979c537a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a1bf39830c74979d6d6e9c097233890cbfe02359fe949d3546ea979c537a50->enter($__internal_18a1bf39830c74979d6d6e9c097233890cbfe02359fe949d3546ea979c537a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
    <h1>Rules</h1>
    <p>
        The following points are valid for all the Universes listed at OGame.org.

        The rules have been established to allow all players to enjoy fair gameplay within their universes.

        Please note, that for data confidentiality reasons, complaints and inquiries regarding particular accounts
        will only be discussed with their owners.

        For the specific rules, or if you have any questions or are unsure about anything to do with the rules,
        you can read about it here: Specific Rules and Additional Explanations
    </p>

    <h2>1. Accounts</h2>
    <p>
        The owner of an account is always the owner of the email address bound to the game account.
        Each account is entitled to be played by a single player at any time, account sitting being the only exception.
        Account exchanges within a single universe must be done with the assistance of a GameOperator and is only
        allowed once every 15 days.
        In strict accordance with the T&Cs the new owner has to change the email address within the first 12 hours after
        the account has been switched.
        You can contact support at http://support.en.ogame.gameforge.com/.
    </p>

    <h2>2. Multi Account</h2>
    <p>
        Every player is allowed to control a single account per universe.
        If two or more accounts are usually, occasionally, or permanently being played from the same
        network (e.g. schools, universities, internet cafés) it is highly recommended to notify a GameOperator in
        advance at http://support.en.ogame.gameforge.com.
    </p>

    <h2>3. Account Sitting</h2>
    <p>
        Account sitting entitles a given player to have his account sitted by another player.
        A GameOperator must be informed through the support system before the sitting takes place
        at http://support.en.ogame.gameforge.com/.
        An account may only be sat for a maximum period of 24 hours.
        The sitting period will be considered over as soon as the actual owner logs in.
        An account can only be sitted, if the account was not sat in the last 7 days and the owner has logged
        into the account since the last sitting.
    </p>

    <h2>4. Bashing</h2>
    <p>
        You are not allowed to attack any given planet or moon owned by a active player, more than 6 times in a 24 hour
        period. This rule also applies to moon destruction missions. Probe attacks and interplanetary missile attacks do
        not count towards the bashing rule.
        In specially-designed universes announced in the forum (http://board.en.ogame.gameforge.com/), the bashing rule
        can be modified or overruled.
        Bashing is only allowed when your alliance is at war with another alliance. The war must be announced on the
        relevant OGame board, in the correct forum and must comply with the forum specific rules.
    </p>

    <h2>5. Pushing</h2>
    <p>
        No account is allowed to obtain unfair profit from the resources of a lower ranked account.
        Pushing is, but not only limited to, the following: resources sent from a lower ranked account to a higher
        ranked one with nothing tangible in return.
        Trades must be completed within 72 hours.
        For all exceptions (bounties, ...) a GameOperator needs to be informed via ticket system
        (http://support.en.ogame.gameforge.com/).
    </p>

    <h2>6. Bugusing / Scripting</h2>
    <p>
        Using a bug for anyone`s profit intentionally or not reporting a bug intentionally is strictly forbidden. Using
        a programme as an interface between the player and the game is prohibited. Any other form of automatically
        generated information created for malicious misuse is forbidden as well. Exceptions are listed in the forum of
        the game.
    </p>

    <h2>7. Real-life threats</h2>
    <p>
        Implying that you are going to locate and harm another player, team member, Gameforge representative, or any
        person that might be related in any way to any of the game services is forbidden.
    </p>

    <h2>8. Insults and Spam</h2>
    <p>Any kind of insult and spam are not allowed.</p>

    <h2>9. Language</h2>
    <p>
        The game`s publisher reserves the right to exclude players, who are not able to speak the game`s respective
        native language (e.g. in the game, forum and IRC official chat-rooms). Other permitted languages will be listed
        in the official game forum.
    </p>

    <h2>10. Breach of the rules</h2>
    <p>
        Any kind of breach of the rules will be punished with warnings up to a permanent ban of the account. The
        corresponding GameOperators decide the type and duration of punishments and are contact persons for bans.
    </p>

    <h2>11. Terms and Conditions</h2>
    <p>
        The T&Cs are supplemented with these rules and must also be abided by at all times.
    </p>

    <h2>12. Exceptions</h2>
    <p>
        The game`s community management reserves the right to have exceptions to these rules. In special cases (e.g.
        during events) game rules can be changed or suspended. The user group concerned will be informed when and if
        this is the case.
    </p>
";
        
        $__internal_18a1bf39830c74979d6d6e9c097233890cbfe02359fe949d3546ea979c537a50->leave($__internal_18a1bf39830c74979d6d6e9c097233890cbfe02359fe949d3546ea979c537a50_prof);

        
        $__internal_d6a937ef6b32f5e7f0ef55f077bd8a50ed8ad983a85eb6dcad79575852654240->leave($__internal_d6a937ef6b32f5e7f0ef55f077bd8a50ed8ad983a85eb6dcad79575852654240_prof);

    }

    public function getTemplateName()
    {
        return "features/rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    Rules
{% endblock %}

{% block main %}

    <h1>Rules</h1>
    <p>
        The following points are valid for all the Universes listed at OGame.org.

        The rules have been established to allow all players to enjoy fair gameplay within their universes.

        Please note, that for data confidentiality reasons, complaints and inquiries regarding particular accounts
        will only be discussed with their owners.

        For the specific rules, or if you have any questions or are unsure about anything to do with the rules,
        you can read about it here: Specific Rules and Additional Explanations
    </p>

    <h2>1. Accounts</h2>
    <p>
        The owner of an account is always the owner of the email address bound to the game account.
        Each account is entitled to be played by a single player at any time, account sitting being the only exception.
        Account exchanges within a single universe must be done with the assistance of a GameOperator and is only
        allowed once every 15 days.
        In strict accordance with the T&Cs the new owner has to change the email address within the first 12 hours after
        the account has been switched.
        You can contact support at http://support.en.ogame.gameforge.com/.
    </p>

    <h2>2. Multi Account</h2>
    <p>
        Every player is allowed to control a single account per universe.
        If two or more accounts are usually, occasionally, or permanently being played from the same
        network (e.g. schools, universities, internet cafés) it is highly recommended to notify a GameOperator in
        advance at http://support.en.ogame.gameforge.com.
    </p>

    <h2>3. Account Sitting</h2>
    <p>
        Account sitting entitles a given player to have his account sitted by another player.
        A GameOperator must be informed through the support system before the sitting takes place
        at http://support.en.ogame.gameforge.com/.
        An account may only be sat for a maximum period of 24 hours.
        The sitting period will be considered over as soon as the actual owner logs in.
        An account can only be sitted, if the account was not sat in the last 7 days and the owner has logged
        into the account since the last sitting.
    </p>

    <h2>4. Bashing</h2>
    <p>
        You are not allowed to attack any given planet or moon owned by a active player, more than 6 times in a 24 hour
        period. This rule also applies to moon destruction missions. Probe attacks and interplanetary missile attacks do
        not count towards the bashing rule.
        In specially-designed universes announced in the forum (http://board.en.ogame.gameforge.com/), the bashing rule
        can be modified or overruled.
        Bashing is only allowed when your alliance is at war with another alliance. The war must be announced on the
        relevant OGame board, in the correct forum and must comply with the forum specific rules.
    </p>

    <h2>5. Pushing</h2>
    <p>
        No account is allowed to obtain unfair profit from the resources of a lower ranked account.
        Pushing is, but not only limited to, the following: resources sent from a lower ranked account to a higher
        ranked one with nothing tangible in return.
        Trades must be completed within 72 hours.
        For all exceptions (bounties, ...) a GameOperator needs to be informed via ticket system
        (http://support.en.ogame.gameforge.com/).
    </p>

    <h2>6. Bugusing / Scripting</h2>
    <p>
        Using a bug for anyone`s profit intentionally or not reporting a bug intentionally is strictly forbidden. Using
        a programme as an interface between the player and the game is prohibited. Any other form of automatically
        generated information created for malicious misuse is forbidden as well. Exceptions are listed in the forum of
        the game.
    </p>

    <h2>7. Real-life threats</h2>
    <p>
        Implying that you are going to locate and harm another player, team member, Gameforge representative, or any
        person that might be related in any way to any of the game services is forbidden.
    </p>

    <h2>8. Insults and Spam</h2>
    <p>Any kind of insult and spam are not allowed.</p>

    <h2>9. Language</h2>
    <p>
        The game`s publisher reserves the right to exclude players, who are not able to speak the game`s respective
        native language (e.g. in the game, forum and IRC official chat-rooms). Other permitted languages will be listed
        in the official game forum.
    </p>

    <h2>10. Breach of the rules</h2>
    <p>
        Any kind of breach of the rules will be punished with warnings up to a permanent ban of the account. The
        corresponding GameOperators decide the type and duration of punishments and are contact persons for bans.
    </p>

    <h2>11. Terms and Conditions</h2>
    <p>
        The T&Cs are supplemented with these rules and must also be abided by at all times.
    </p>

    <h2>12. Exceptions</h2>
    <p>
        The game`s community management reserves the right to have exceptions to these rules. In special cases (e.g.
        during events) game rules can be changed or suspended. The user group concerned will be informed when and if
        this is the case.
    </p>
{% endblock %}", "features/rules.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\features\\rules.html.twig");
    }
}
